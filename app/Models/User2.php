<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    /**
     * Relacionamento muitos-para-muitos com grupos.
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'user_group');
    }
}
