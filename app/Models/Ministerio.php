<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ministerio extends Model
{
    use HasFactory;
    
    protected $table = 'ministerios';
    protected $primaryKey = 'CodMinist';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NombreMinist',
        'FechaR',
        'Telefono',
        'DireccionM',
        
    ];
}
