<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    protected $fillable = ['name','description','photo','user_id','category_id'];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comment(){
        return $this->morphMany(Comment::class, 'commentable') ;
    }
    public function category(){
        return $this->belongsTo(Category::class) ;
    }

}
