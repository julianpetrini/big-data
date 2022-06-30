@extends ('layouts/master')


@section('header')
<header>

    <img src="{{ asset('img/logo_big_data_white.png') }}" class="img-fluid rounded mx-auto d-block"
        alt="Responsive image">

    <h1 class="title_header">Ihre besten Daten finden und kommentieren</h1>

    <p class="pMain">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur cumque blanditiis autem.
        Laboriosam temporibus veniam rerum labore commodi totam ad nisi fuga, rem alias veritatis iure facilis sapiente
        quam
        ipsam!</p>

</header>
@endsection

{{-- THIS WOULD BE THE FORMAT OF THE POST --}}
@section ('posts')
<section class="post_bbox text-white">
    <div class="card cardBgColor cardBoxStyle">
        <img class="card-img-top" src="{{ asset('img/bdata.jpg') }}" alt="Card image cap">
        <div class="card-body cardedit">
            <h5 class="card-title "><strong>Post Title</strong></h5>
            <div class="aYd">
                <h6 class="card-subtitle mb-2 text-white"> Author</h6>
                <h6 class="card-subtitle mb-2 fw-lighter">20.06.2022</h6>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href={{'postdetail'}} class="btn buttonCustom text-white">Full post</a>
        </div>
    </div>
</section>
@endsection


