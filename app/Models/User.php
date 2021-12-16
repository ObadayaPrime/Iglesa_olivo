<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $table = 'admin';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user',
        'password',
        'email',
        'Ci',
        'rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /*public function persona()
    {
        return $this->hasOne(Persona::class, 'personaId');
        //return $this->hasMany(Persona::class,'personaId' );
    }
    public function rol()
    {
        return $this->hasOne(Rol::class, 'rolId');
        //return $this->hasMany(Persona::class,'personaId' );
    }*/
    public function isAdmin(){
        $verificar=DB::table('roles_admin')->where('roles_id',1)->where('admin_id',auth()->user()->id)->first();
        if ($verificar==null) {
            return false;
        }else {
            return true;
        }
    }

    public function isEvangelista(){
        $verificar=DB::table('roles_admin')->where('roles_id',2)->where('admin_id',auth()->user()->id)->first();
        if ($verificar==null) {
            return false;
        }else {
            return true;
        }
    }

    public function isAlabanza(){
        $verificar=DB::table('roles_admin')->where('roles_id',3)->where('admin_id',auth()->user()->id)->first();
        if ($verificar==null) {
            return false;
        }else {
            return true;
        }
    }

    public function isOracion(){
        $verificar=DB::table('roles_admin')->where('roles_id',6)->where('admin_id',auth()->user()->id)->first();
        if ($verificar==null) {
            return false;
        }else {
            return true;
        }
    }
}
