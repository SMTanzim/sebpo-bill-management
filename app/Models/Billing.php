<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'monthly_charge',
        'additional_charge',
        'due',
        'discount',
        'advance',
        'vat',
        'total',
    ];
}
