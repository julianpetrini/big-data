@extends ('layouts/master')
@include ('layouts/nav')

{{-- HERE GOES THE CONTENT --}}

<div class="postDetailsBox">
    <img src="{{ asset('img/bdata.jpg') }}" class="img-fluid rounded mx-auto d-block m-2"
        alt="Responsive image">

    <h1 class="title_header"><strong> TITLE OF THE POST HERE </strong></h1>
    <p class="pMain">Description of the post. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur cumque blanditiis autem.
        Laboriosam temporibus veniam rerum labore commodi totam ad nisi fuga, rem alias veritatis iure facilis sapiente
        quam
        ipsam!</p>
</div>


<form class="text-white">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@include ('layouts/footer')
