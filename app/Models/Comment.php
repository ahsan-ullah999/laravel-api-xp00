<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;
    protected $casts = [
        'description'=>'array'
     ];

   public function posts(){
    return $this->belongsTo(Post::class, 'post_id');
   }
   public function users(){
    return $this->belongsTo(User::class, 'user_id');
   }

}
