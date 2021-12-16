<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    
    protected $table = 'actividad';
    protected $primaryKey = 'IDac';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NombreActi',
        'FechaInicio',
        'FechaFinal',
        'Lugar',
        
    ];
}
