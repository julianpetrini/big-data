@extends ('layouts/master')


{{-- HERE GOES THE CONTENT --}}
@section ('createpost')
<div class="postDetailsBox">
    <br>
    <h1 class="title_header"><strong> Create your own post </strong></h1>
    <p class="pMain">Here you will be able to create your own post so later people are able to discuss about it</p>
</div>

<div class="postDetailsBox">
    <form action="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-white">Title of the post</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-white">Author</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label text-white">Here you should write your post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Write an amazing comment"></textarea>
        </div>
        <a href="#" class="btn buttonCustom text-white">submit</a>
       
    </form>
</div>

</section>

@endsection