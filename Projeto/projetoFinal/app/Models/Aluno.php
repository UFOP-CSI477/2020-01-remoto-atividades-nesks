<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory; //traits -> caracteristicas, eu consigo utilizar os metodos dessa classe como se fosse extensão da classe principal.


    protected $fillable= ['nome', 'nivel', 'personagem', 'imgPersonagem'];

// 1 aluno tem n scores
    public function scores(){
        return $this->hasMany(Score::class);
    }
}
