@extends('app')
@section('content')
<section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold mb-4 text-center">Login For Access Dashboard</h2>
          <form action="{{route('check')}}" method="POST" class="row">
            @csrf
            <div class="col-12 mb-3">
              <input type="email" class="form-control mb-2" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="col-12 mb-3">
                <input type="password" class="form-control mb-2" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="col-12 text-right">
              <button type="submit" value="send" class="btn btn-main btn-main-sm">Login Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection