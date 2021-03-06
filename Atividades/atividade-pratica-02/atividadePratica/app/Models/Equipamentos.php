<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamentos extends Model
{
    use HasFactory;


    protected $fillable = ['nome'];

    public function registros(){
        return $this->hasMany(Registros::class);
    }
}
