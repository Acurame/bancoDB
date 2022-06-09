<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ornato extends Model
{
    protected $table = 'ornato';
    use HasFactory;
    protected $fillable = [
        'numero_ornato',
        'monto',
    ];
}
