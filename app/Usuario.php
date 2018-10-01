<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $fillable = ['nome','documento','nivel','id'];  

  public function emprestimos(){
    return $this->hasMany(Emprestimo::class, 'id_usuario');
  }
}
