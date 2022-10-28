<?php

namespace App\Actions;
use Illuminate\Support\Str;

class GenerateReference
{
	public static function generateReference(){
        date_default_timezone_set("Africa/Lagos");
        return date('YmdHi') . Str::random(8);
    }
}