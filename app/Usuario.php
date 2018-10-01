<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $fillable = ['nome','documento','nivel','id','id_user'];  

  public function emprestimos(){
    return $this->hasMany(Emprestimo::class, 'id_usuario');
  }

  public function user(){
    //return User::where('id','=',$this->id_user);
    return $this->belongsTo(User::class,'id_user');
  }
}
