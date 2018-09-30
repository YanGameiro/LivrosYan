<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
  protected $fillable = ['nome','autor','status','ano','nivel','id'];  
  
  public function emprestimos(){
    return $this->hasMany(Emprestimo::class, 'id_livro');
  }
}
