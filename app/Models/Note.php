<?php

namespace App\Models;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{

    protected $fillable = [
        'note',
        'user_id',
        'book_id',
    ];
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
