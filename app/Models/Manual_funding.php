<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual_funding extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'manual_fundings';
    
    protected $fillable = [
        'user_id',
        'amount',
        'bank_name',
        'account_name',
        'account_number'
        
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
