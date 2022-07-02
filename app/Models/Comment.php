<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $quarded = false;

    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

<<<<<<< HEAD
}
=======
}
>>>>>>> 4f3b7efed6fa862633f46563606a963b7f9d8143
