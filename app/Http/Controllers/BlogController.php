<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class BlogController extends Controller
{
    //
    public function showAll() {
         $posts = Post::all()->sortByDesc('created_at');

         return view('test', ['posts' => $posts]);
    }

    public function create(Request $request) {
 
        $post = new Post();
        // we set the properties title and content
        // with the values that we got in the post-request
        $post->title = $request->title;
        $post->author = $request->author;
        $post->content = $request->content;



        // we save the new book-Object in the books
        // table in our database
        $post->save();

        // at the end we make a redirect to the url /posts
        return redirect('/home');

    }

    public function details($id) {
 

        $post = Post::findOrFail($id);
 
        return view('postDetail', ['postdetails' => $post]);
    }


    public function delete($id) {
 

        $result = Post::findOrFail($id)->delete();

        // after that we redirect to the message list again
        return redirect('/postDetail');
    } 

    public function update(Request $request, $id) {
 
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required'
        ]);
        $data = Post::findOrFail($id);
        $data->title = $request->title;
        $data->author = $request->author;
        $data->content = $request->content;
        $data->save();
  
        return redirect('/test');
    }

    // public function newComment(Request $request) {

    //     $request->validate([
    //         'user' => 'required',
    //         'comment' => 'required',
    //     ]);

    //     // we create a new Message-Object
    //     $comment = new Comment();
    //     // we set the properties title and content
    //     // with the values that we got in the post-request
    //     $comment->Name = $request->name;
    //     $comment->CommentID = $request->session()->get('entry');

    //     $comment->Comment = $request->comment;

    //     $request->session()->put('newComment',1);

    //     // we save the new Message-Object in the messages
    //     // table in our database
    //     $comment->save();

    //     // at the end we make a redirect to the url /messages
    //     return redirect('/');
    // }

}
