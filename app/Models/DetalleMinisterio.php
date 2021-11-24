<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleMinisterio extends Model
{
    use HasFactory;
    
    protected $table = 'detalle_ministerio';
    //protected $primaryKey = 'Ci';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Ci',
        'CodMinist',
        'Fecha',  
    ];
}
