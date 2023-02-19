<?php

namespace App\Models;

 use Illuminate\Database\Eloquent\Model;
use App\Models\Note;
use App\Models\User;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Auther;
use App\Models\Comment;
use App\Models\Category;

class Book extends Model
{
    protected $fillable = [
        'name',
        'document',
        'cover',
        'user_id',
        'category_id',
        'author_id',
        'price',
        'discount',
    ];
    use HasFactory;



    public function comment(){
        return $this->morphMany(Comment::class, 'commentable') ;
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function auther(){
        return $this->belongsTo(Auther::class);
    }
    public function notes(){
        return $this->hasMany(Note::class);
    }
    public function category(){
        return $this->belongsTo(Category::class) ;
    }
}
