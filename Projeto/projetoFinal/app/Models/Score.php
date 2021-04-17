<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = ['data', 'nivel', 'erros', 'acertos', 'premiacao'];

    //1 score pertence a um aluno
    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
