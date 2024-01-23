@extends('app')
@section('content')
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-4 mb-md-0">
        <div class="sticky-image">
          <img class="img-fluid w-100" src="{{ asset('uploads/images') }}/{{$post->image}}" alt="{{ $post->title }}">
        </div>
      </div>
      <div class="col-lg-6 col-md-7 offset-lg-1">
        <h1 class="mb-4">{{ $post->title }}</h1>
        <small>Published By: {{ $post->user->name }}</small>
        <br>
        <small>Publish Date: {{ $post->created_at }}</small>
        <div class="content">
          <p>{{ $post->details }}</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection