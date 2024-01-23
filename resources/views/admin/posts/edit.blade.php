@extends('admin.app')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Post
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>

    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Post Edit ({{$post->title}})</h4>
              <p class="card-description text-center"> Basic form layout for edit post </p>
              <form class="forms-sample" action="{{ route('post.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title', $post->title)}}" name="title" id="title" placeholder="Post Title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Post Details</label>
                  <textarea name="details" class="form-control @error('details') is-invalid @enderror" id="details" cols="10" rows="5">{{ old('details', $post->details) }}</textarea>
                    @error('details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1" {{ ($post->status == 1) ? 'checked' : '' }}> Active </label>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0" {{ ($post->status == 0) ? 'checked' : '' }}> Inactivate </label>
                            </div>
                        </div>
                    </div>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                <div class="text-center">
                    <img class="img-fluid w-25" src="{{asset('uploads/images')}}/{{$post->image}}" alt="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                <button type="reset" class="btn btn-light">Clear</button>
              </form>
            </div>
          </div>
        </div>
    </div>

  </div>
@endsection