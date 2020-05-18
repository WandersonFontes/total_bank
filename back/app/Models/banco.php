<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class banco extends Model
{
    protected $fillable = [
        'cliente', 'conta', 'saldo',
    ];
}
