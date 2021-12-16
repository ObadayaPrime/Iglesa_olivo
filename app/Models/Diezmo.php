<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diezmo extends Model
{
    use HasFactory;
    protected $table = 'diezmos';
    protected $primaryKey = 'Cod';

    protected $fillable = [
        'Ci',
        'Fecha',
        'Bs',

    ];
}