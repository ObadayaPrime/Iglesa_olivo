<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miembros extends Model
{
    use HasFactory;
    
    protected $table = 'miembros';
    protected $primaryKey = 'Ci';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellidoP',
        'apellidoM',
        'FechaNac',
        'sexo',
        'Telefono',
        'Estado',
        'Direccion',      
    ];
}
