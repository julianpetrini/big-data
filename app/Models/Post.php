<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $quarded = false;

<<<<<<< HEAD
    
     //Get the comments for the blog post.
    
=======

     //Get the comments for the blog post.

>>>>>>> 4f3b7efed6fa862633f46563606a963b7f9d8143
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

<<<<<<< HEAD
}
=======
}
>>>>>>> 4f3b7efed6fa862633f46563606a963b7f9d8143
