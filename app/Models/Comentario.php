<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'emprendedor_id', 'content'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function emprendedor()
    {
        return $this->belongsTo(Emprendedor::class);
    }
}