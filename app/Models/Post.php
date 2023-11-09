<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public function langs()
    {
        return $this->hasmany(Posts::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
