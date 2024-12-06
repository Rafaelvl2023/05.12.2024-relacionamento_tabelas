<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * Relacionamento muitos-para-muitos com usuários.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_group');
    }
}
