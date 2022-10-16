<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirtimePrice extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'airtime_prices';
}
