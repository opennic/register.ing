<?php

define('DNS_PATH', '/tmp');

class JobController {
    public function run() {
        Log::info('Job Controller is running!');

        $tlds = TLD::only_public();
        foreach($tlds as $tld) {
            Log::info("Generating Zone file for " . $tld->tld);
            $this->generate_tld($tld);
        }
    }

    private function generate_tld($tld) {
        // Get the Domains in the TLD
        $serial = sprintf("%04d%02d%02d", date("Y"), date("m"), date("d"));
        $server = 'my.dns.server.com';

        $file = "\$ORIGIN .
\$TTL 3600       ; 1 hour
{$tld->tld}                   IN SOA  {$server} hostmaster.dns.{$tld->tld}. (
                                $serial ; serial
                                3600       ; refresh (1 hour)
                                3600       ; retry (1 hour)
                                604800     ; expire (1 week)
                                86400      ; minimum (1 day)
                            )
                            
                            ";
        // And grab all of the domains!
        $domains_query = Domains::where('tld_id', '=', $tld->id);
        foreach($domains_query->get() as $domain) {
            Log::info('Adding ' . $domain->domain);
            $file .= '; ' . $domain->domain . $tld->tld . "\n";
        }

        file_put_contents(DNS_PATH . '/' . $tld->tld . '.zone', $file);
    }
}
