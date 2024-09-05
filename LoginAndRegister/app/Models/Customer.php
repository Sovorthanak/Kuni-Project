<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'customers';

    protected $fillable = [
        'customername', // Add other fields that should be mass assignable
        'accountname',
        'type',
        'accountid',
        'status',
        'tariff',
        'agent',

    ];
}
