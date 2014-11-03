# Requirements

- mysql 5.1+
- php 5.4+ (with mcrypt enabled)
- supervisord
- beanstalkd
- bind
- sendmail (`mail()`) compatible setup, or mailgun.com account.

# quick install guide

    # vim app/config/database.php
    # ./artisan migrate:install
    # ./artisan migrate
    # vim app/config/mail.php
    # vim app/config/packages/zizaco/confide/config.php

# sample supervisord queue listener config for cPanel server

    /etc/supervisord.d/dashboard-queue.ini

    [program:dns-queue]
    command=/usr/local/bin/php "/home/dns/artisan" "queue:listen" "--timeout=0"
    user=dns
    numprocs=1
    directory=/home/dns
    autostart=true
    startsecs=10
    process_name=listener_%(process_num)s

    redirect_stderr=true
    stdout_logfile=/home/dns/app/storage/logs/supervisord_queue.log
