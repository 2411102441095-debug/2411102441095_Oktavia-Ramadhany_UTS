<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Ini wajib ada supaya data bisa disimpan!
    protected $fillable = [
        'nama', 
        'email', 
        'alamat', 
        'nomor_telpon'
    ];
}