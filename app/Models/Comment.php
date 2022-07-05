<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    public function newComment(Request $request) {

        $request->validate([
            'author' => 'required',
            'comment' => 'required',
        ]);

        // we create a new Message-Object
        $comment = new Comment();
        // we set the properties title and content
        // with the values that we got in the post-request
        $comment->author = $request->author;
        $comment->id = $request->session()->get('entry');

        $comment->Comment = $request->comment;

        $request->session()->put('newComment',1);

        // we save the new Message-Object in the messages
        // table in our database
        $comment->save();

        // at the end we make a redirect to the url /messages
        return redirect('/');
    }
}
