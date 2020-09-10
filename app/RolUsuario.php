<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model
{
    protected $table = 'roles_usuario';
    protected $primaryKey = 'id';
    
    public $timestamps = false;


    //relacion con usuarios 
    public function usuarios()
    {
        return $this->hasMany(User::class,'rol_id','id');
    }

}
