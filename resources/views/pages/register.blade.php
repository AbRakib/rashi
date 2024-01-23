@extends('app')
@section('content')
<section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h2 class="font-weight-bold mb-4">Register Now</h2>
          <form action="{{route('user.store')}}" method="POST" class="row">
            @csrf
            <div class="col-lg-6 mb-3">
              <input type="text" class="form-control mb-2 @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" value="{{old('name')}}" required>
              @error('name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-lg-6 mb-3">
              <input type="email" class="form-control mb-2 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" value="{{old('email')}}" required>
              @error('email')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-lg-6 mb-3">
              <input type="number" class="form-control mb-2 @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{old('phone')}}" placeholder="Your Phone" required>
              @error('phone')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-lg-6 mb-3">
              <input type="password" class="form-control mb-2 @error('password') is-invalid @enderror" id="password" name="password" value="{{old('password')}}" placeholder="Password" required>
              @error('password')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-12 mb-3">
              <textarea name="address" id="address" class="form-control mb-2 @error('address') is-invalid @enderror" placeholder="Your Address" required>{{old('name')}}</textarea>
              @error('address')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-12 text-right">
              <button type="submit" value="send" class="btn btn-main btn-main-sm">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>
@endsection