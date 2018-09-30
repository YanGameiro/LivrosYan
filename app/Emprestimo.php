<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
  protected $fillable = ['data_inicio','data_fim','id_usuario','id_livro','id','status'];  
  
  public function livro(){
        return $this->belongsTo(Livro::class, 'id_livro');
  }
  public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario');
  }
}
