<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    protected $fillable = ['name'];
    use HasFactory;


    public function posts(){
      return $this->hasMany(Post::class);
    }
    public function books(){
        return $this->hasMany(Book::class);

    }
}
