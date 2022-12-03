<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'type_of_org',
        'pan',
        'tan',
        'gstin',
        'registered_address',
        'billing_address',
        'cp_name',
        'cp_phone',
        'cp_email',
    ];
}
