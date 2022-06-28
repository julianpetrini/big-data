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
   
        // at the end we make a redirect to the url /books
        return redirect('/test');        
    }


}
