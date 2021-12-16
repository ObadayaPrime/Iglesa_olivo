<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofrenda extends Model
{
    use HasFactory;
    protected $table = 'ingresos';
    protected $primaryKey = 'CodIngreso';

    protected $fillable = [
        'Culto',
        'Fecha',
        'Monto',

    ];
}