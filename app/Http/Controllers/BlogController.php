<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Comment;

class BlogController extends Controller
{
    public function newComment(Request $request) {

        $request->validate([
            'name' => 'required',
            'comment' => 'required',
        ]);

        // we create a new Message-Object
        $comment = new Comment();
        // we set the properties title and content
        // with the values that we got in the post-request
        $comment->Name = $request->name;
        $comment->CommentID = $request->session()->get('entry');

        $comment->Comment = $request->comment;

        $request->session()->put('newComment',1);

        // we save the new Message-Object in the messages
        // table in our database
        $comment->save();

        // at the end we make a redirect to the url /messages
        return redirect('/');
    }
}
