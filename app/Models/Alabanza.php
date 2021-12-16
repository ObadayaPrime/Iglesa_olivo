<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alabanza extends Model
{
    use HasFactory;
    protected $table = 'alabanzas';
    protected $primaryKe = 'ID';

    protected $fillable = [
        'Nombre',
        'tipo',
        'letra',
        'video',
        'tipo2',

    ];
}
