<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = ['nivel','premiacao','aluno_id','data','erros','acertos'];

    //1 score pertence a um aluno
    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
