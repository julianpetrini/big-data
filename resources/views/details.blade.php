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
                <h2>Post Details:</h2>

<h3>{{$post->title}}</h3>
<p>{{$post->content}}</p>
<p>{{$post->content}}</p><br>

<p>{{$post->created_at->diffForHumans()}}


<form action="/test/{{$post->id}}"  method="POST" class="form-horizontal">
                {{ csrf_field() }}
    
        <input type="hidden" name="id" class="form-id" value="{{$post->id}}">
        <input type="text" name="title" class="form-title"  value="{{ $post->title }}">
        <input type="text" name="author" class="form-author"  value="{{ $post->author }}">
        <input type="text" name="content" class="form-content"  value="{{ $post->content }}"><br>
                
        <br>
        <button type="submit" class="btn"><i class="save"></i>Update</button><br>
                                  
</form>	
<br>
<form action="/test/{{$post->id}}" method="post">
    @csrf
    @method('delete')
    <button class="delete" type="submit">Delete</button>
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
