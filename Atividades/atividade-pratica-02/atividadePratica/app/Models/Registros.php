<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    use HasFactory;

    protected $fillable = ['descricao','datalimite','tipo'];

    public function equipamento(){
        return $this->belongsTo(Equipamentos::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
