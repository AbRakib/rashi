<footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <div class="block">
            <a href="index.html" class="mb-4 d-inline-block"> <img src="{{ asset('frontend/images/logo.png') }}" alt="Vex" width="100px"> </a>
            <ul class="list-inline footer-menu">
              
              <li class="list-inline-item">
                <a href="{{route('contact')}}">Contact</a>
              </li>
              
              <li class="list-inline-item">
                <a href="{{route('terms')}}">Terms &amp; Conditions</a>
              </li>
              
              <li class="list-inline-item">
                <a href="{{route('privacy')}}">Privacy Policy</a>
              </li>
              
            </ul>
            <p class="copyright-text">Copyright &copy; {{date('Y')}}, Designed &amp; Developed By <a href="https://arakib.com/">Abdur Rakib</a></p>
          </div>
        </div>
      </div>
    </div>
</footer>