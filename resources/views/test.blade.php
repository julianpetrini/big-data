@extends ('layouts/master')
@include ('layouts/nav')

<img src="{{ asset('img/logo_big_data_white.png') }}" class="img-fluid rounded mx-auto d-block" alt="Responsive image">

<h1 class="title_header">Ihre besten Daten finden und kommentieren</h1>

<p class="pMain">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur cumque blanditiis autem.
    Laboriosam temporibus veniam rerum labore commodi totam ad nisi fuga, rem alias veritatis iure facilis sapiente quam
    ipsam!</p>


{{-- THIS WOULD BE THE FORMAT OF THE POST --}}

<section class="post_bbox text-white">
    <div class="card cardBgColor cardBoxStyle">
        <img class="card-img-top" src="{{ asset('img/bdata.jpg') }}" alt="Card image cap">
        <div class="card-body cardedit">
            <h5 class="card-title "><strong> Card title</strong></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>



                <h2>Create new post: </h2>
            
                <form action="/test" method="post">
                    <input type="text" name="title" class="form-title" placeholder="Title">
                    <input type="text" name="author" class="form-author" placeholder="Author">
                    <input type="text" name="content" class="form-content" placeholder="Content">
                    
                    @csrf
                    <button class="btn btn-primary" type="submit">Submit</button>
                
                </form>

                
            

                
            <a href="#" class="btn buttonCustom text-white">Go somewhere</a>
        </div>
    </div>

    <div class="card cardBgColor cardBoxStyle">
        <img class="card-img-top" src="{{ asset('img/bdata.jpg') }}" alt="Card image cap">
        <div class="card-body cardedit">
            <h5 class="card-title "><strong> Card title</strong></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>


                <h2>Recent posts:</h2>

<ul>
    <!-- loops through the $posts, that this blade template
    gets from MessageController.php. for each element of the loop which
    we call $post we print the properties title, content
    and created_at in an <li> element -->
    @foreach ($posts as $post) 
        <li>
            <b>
                 
                <a href="/post/{{$post->id}}">{{$post->title}}:</a>
            </b><br>
            {{$post->author}}<br>
            {{$post->title}}<br>
            {{$post->content}}<br>
            <span>Create: {{$post->created_at->diffForHumans()}}</span>
                <br> 

                <a href="/details/{{$post->id}}">Update from "{{$post->title}}":</a>
                    <span>{{ $post->updated_at->diffForHumans() }}</span>
                    <a href="/details/{{$post->id}}" class="btn btn-primary">To Edit</a>
                
            <h2>Create new comment: </h2>
                
                </b><br>

        </li>
    @endforeach

</ul>
            <a href="#" class="btn buttonCustom text-white">Go somewhere</a>
        </div>
    </div>

    <div class="card cardBgColor cardBoxStyle">
        <img class="card-img-top" src="{{ asset('img/bdata.jpg') }}" alt="Card image cap">
        <div class="card-body cardedit">
            <h5 class="card-title "><strong> Card title</strong></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
               
            <a href="#" class="btn buttonCustom text-white">Go somewhere</a>
        </div>
    </div>

    <div class="card cardBgColor cardBoxStyle">
        <img class="card-img-top" src="{{ asset('img/bdata.jpg') }}" alt="Card image cap">
        <div class="card-body cardedit">
            <h5 class="card-title "><strong> Card title</strong></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn buttonCustom text-white">Go somewhere</a>
        </div>
    </div>

    <div class="card cardBgColor cardBoxStyle">
        <img class="card-img-top" src="{{ asset('img/bdata.jpg') }}" alt="Card image cap">
        <div class="card-body cardedit">
            <h5 class="card-title "><strong> Card title</strong></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn buttonCustom text-white">Go somewhere</a>
        </div>
    </div>

  

</section>
