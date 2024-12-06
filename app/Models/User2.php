<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    use HasFactory;

    protected $table = 'users2'; // Nome da tabela no banco de dados

    protected $fillable = ['name', 'email', 'password']; // Colunas que podem ser preenchidas em massa
}
