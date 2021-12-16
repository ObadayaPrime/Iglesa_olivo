<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personanueva extends Model
{
    use HasFactory;
    
    protected $table = 'nuevapersona';
    protected $primaryKey = 'CIn';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre',
        'ApellidoP',
        'ApellidoM',
        'Actividad',
        'Sexo',
        'Telefono',
        'Direccionn',      
    ];
}
