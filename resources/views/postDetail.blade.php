@extends ('layouts/master')


{{-- HERE GOES THE CONTENT --}}
@section ('postDetail')
<div class="postDetailsBox">
    <img src="data:image/jpg;base64,{{ chunk_split(base64_encode($detalleDelPost->postPic)) }}" class="img-fluid rounded mx-auto d-block m-2" alt="Responsive image">

    <h2 class="title_header"><strong>{{ $detalleDelPost->title }}</strong></h2>
    <h3 class="title_header">{{ $detalleDelPost->author }}</h3>
    <p class="pMain">{{ $detalleDelPost->content }}</p>
</div>
<!-- loop through the comment list of a message and display the comment text and user -->
@foreach ($post->comments as $comment)
 
   <p>{{$comment->comment}}</p>
 
@endforeach

<form action="/postDetail/{{$post->id}}" method="post">
   @csrf
   @method('delete')
   <button class="btn btn-primary" type="submit">Delete</button>
</form>

<div class="postDetailsBox">
    <h3 class="title_header"><strong> LEAVE YOUR COMMENTS </strong></h3>
    <form action="/postDetail" method="post">
            <!-- hidden field holding message->id to remember, which message
            the new comment will belong to -->
            <input type="hidden" name="post_id" value="{{$post->id}}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-white">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label text-white">Tell us what you think</label>
            <textarea  name="comment" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Write an amazing comment"></textarea>
        </div>
        @csrf
        <button type="submit" class="btn buttonCustom text-white">Submit</button>
        <a href="editComment" class="btn buttonCustom text-white">Edit</a>
    </form>
</div>

</section>

@endsection





