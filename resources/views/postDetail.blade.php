@extends ('layouts/master')


{{-- HERE GOES THE CONTENT --}}
@section ('postDetail')
<div class="postDetailsBox">
    <img src="{{ asset('img/bdata.jpg') }}" class="img-fluid rounded mx-auto d-block m-2" alt="Responsive image">

    <h2 class="title_header"><strong> title</strong></h2>
    <p class="pMain">Description of the post. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur
        cumque blanditiis autem.
        Laboriosam temporibus veniam rerum labore commodi totam ad nisi fuga, rem alias veritatis iure facilis sapiente
        quam
        ipsam!</p>
</div>

<div class="postDetailsBox">
    <h3 class="title_header"><strong> LEAVE YOUR COMMENTS </strong></h3>
    <form action="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-white">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label text-white">Tell us what you think</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Write an amazing comment"></textarea>
        </div>
        <a href="#" class="btn buttonCustom text-white">submit</a>
    </form>
</div>

</section>
<h3 class="title_header">THOUGHTS</h3>
{{-- @if ($ there is comments on the table -> table )>= 1) --}}
    <section class="postDetailsBox">

        {{-- @foreach ($comments ->comments as $comment) --}}
            <ul class="ul_comments text-white">
                {{-- <li>{{ $movieObject->titleMessage }}</li>
                <li>{{ $movieObject->contentMessage }} </li> --}}
                <li class="liComment"><strong> Ajoub</strong></li>
                <li class="liComment">balsbasldbasldbalsdlöasndaslödnas asopasjdpoasjd paosjdpoasdjpaso</li>
            </ul>
        {{-- @endforeach
    @else --}}
        <h1 class="title_header">I don't have any nice messages to show you yet ♥</h1>
{{-- @endif --}}
</section>
@endsection





