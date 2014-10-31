<?php

class TLD extends \Eloquent {
    protected $table = 'tlds';
    protected $fillable = [];

    static function only_public() {
        return self::where('public', '=', '1')
            ->select('tld', 'tld_id as id')
            ->get();
    }
}
