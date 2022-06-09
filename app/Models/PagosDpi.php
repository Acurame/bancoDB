<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class PagosDpi extends Model
{
    protected $table = 'pagos_dpi';
    use HasFactory;
    protected $fillable = [
        'dpi',
        'nombre',
        'fechaPago',
        'monto',
        'estado',
        'ornato_id',
        'user_id',
    ];
    
}
