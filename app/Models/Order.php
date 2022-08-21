<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'amount',
        'customers_name',
        'email',
        'customers_address',
        'state',
        "cart_items",
        'phone_no',
        "additional_info",
        "payment_status",
    ];
             
           

}
