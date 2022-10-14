<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $fillable = [
        'product_id',
        'qte',
        'price_total',
        'client',
        'tel',
        'adress',
    ];
}
