<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account_history extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  
        'userid',
        'ip',
        'mobile',
        'email',
        'wallet_amount',
        'withdraw_request',
        'status',
        'action'
    ];
}
