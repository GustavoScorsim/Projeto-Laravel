<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Definir os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'email',
        'idade',
    ];

  
    protected $table = 'usuarios';  

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }
    

}
