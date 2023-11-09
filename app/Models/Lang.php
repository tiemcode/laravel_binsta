<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    use HasFactory;
    protected $table = 'langs';
    //belons to posts
    public function posts()
    {
        return $this->belongsToMany(Posts::class);
    }
}
