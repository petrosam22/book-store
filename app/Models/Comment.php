<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['text','user_id','commentable'];
    use HasFactory;

    public function commentable(){
        return $this->morphTo();
    }
}
