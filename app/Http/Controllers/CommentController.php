<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    function addComment(Request $request) {
  
        // load post with hidden field post_id
        $post = Post::find($request->post_id);
  
        // create a new comment object
        $comment = new Comment();
        // set attributes for the comment
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;        
        // save the new comment in the existing post's comments
        $post->comments()->save($comment);
  
        // redirect to the same post details page with the post_id
        // from the form
        return redirect('/postdetail/' . $request->post_id);          
    }   
 }
 