@extends('app')
@section('content')
<section class="feature-list section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h1>Search Post Result</h1>
        </div>
      </div>

      @if ($posts->count() > 0)
        @foreach ($posts as $post)
            @if ($post->id % 2 == 0)
                <div class="row mb-40">
                <div class="col-md-6 text-center mb-5 mb-lg-0">
                    <img class="img-fluid" src="{{ asset('uploads/images') }}/{{$post->image}}" alt="">
                </div>
                <div class="col-md-6 align-self-center text-center text-md-left">
                    <div class="content">
                    <h4 class="subheading"><a class="link-title" href="{{route('post.view', $post->slug)}}">{{$post->title}}</a></h4>
                    <small>Published By: {{ $post->user->name }}</small>
                    <br>
                    <small>Publish Date: {{ $post->created_at }}</small>
                    <p>{{ $post->details }}</p>
                    <a href="{{route('post.view', $post->slug)}}" class="btn btn-main btn-main-sm">Read More</a>
                    </div>
                </div>
                </div>
            @else
                <div class="row mb-40">
                <div class="col-md-6 order-md-1 order-2 align-self-center text-center text-md-left">
                    <div class="content">
                    <h4 class="subheading"><a class="link-title" href="{{route('post.view', $post->slug)}}">{{ $post->title }}</a></h4>
                    <small>Published By: {{ $post->user->name }}</small>
                    <br>
                    <small>Publish Date: {{ $post->created_at }}</small>
                    <p>{{ $post->details }}</p>
                    <a href="{{route('post.view', $post->slug)}}" class="btn btn-main btn-main-sm">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1 text-center mb-5 mb-lg-0">
                    <img class="img-fluid" src="{{ asset('uploads/images') }}/{{$post->image}}" alt="">
                </div>
                </div>
            @endif
        @endforeach
    @else
        <div class="text-center h4">Data Not Found!</div>
    @endif
    </div>
  </section>
@endsection