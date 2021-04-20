<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Official_Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'billing_type',
        'connection_type',
        'connectivity_type',
        'client_type',
        'distribution_location',
        'description',
        'note',
        'employee',
        'deposit',
    ];
}
