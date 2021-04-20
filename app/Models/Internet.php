<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
    use HasFactory;

    protected $fillable = [
        'connection_date',
        'mikrotik',
        'ip_name',
        'mac',
        'bandwidth',
        'comment',
        'package_id',
    ];
}
