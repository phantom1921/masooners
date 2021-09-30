@include('manso.header')
    <section1>
      <div class="container bg-white pt-4 mt-5">
        <div class="row">
            <div class="col-md-12">
              <h6 class="text-md-left text-center">
                <a href="#" class="linktag">Find Professional</a> / <a href="#" class="linktag">Genral Contractor</a>
              </h6>
              <h2 class="font-weight-normal pt-3 pb-3 text-md-left text-center">
                General Contractors Near Me
              </h2>
              <h5 class="fsize pb-4 text-md-left text-center">Don’t know how to begin? See our <a href="#" class="linktag text-success">Hiring Guide</a> for more information</h5>
            </div>
        </div>
      </div>
    </section1>


    <section2>
      <div class="container bg-white mt-4">
          <div class="row text-md-left text-center">
              <div class="offset-md-9 col-md-3 mt-4 mb-0 pb-0" style="padding-left: 52px;">1 – 15 of 199,756 professionals</div>
          </div>

          <!-- profile 1 -->
          @foreach($professionalDetails as $key => $professionalDetail)
          @foreach($professionalProfiles as $key => $professionalProfile)
          @if ($professionalDetail->user_id==$professionalProfile->user_id)

          <hr class="pt-2 pb-3">
          <div class="row pb-5">
            <div class="col-md-4">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($professionalProfile->pro_cover as $key => $media)
                    <div class="carousel-item {{$loop->first ? 'active' : '';}}">
                        <img class="d-block w-100" src="{{ $media->getUrl() }}" alt="First slide" style="height: 230px">
                      </div>
                    @endforeach

                  {{--  <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset('images/30.jpg')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset('images/19.jpg')}}" alt="Third slide">
                  </div>  --}}
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- col 4 end here -->
            <div class="col-md-6 col-7">
               <div class="row">
                <div class="col-md-1 col-1">
                  <img src="images/_.jpg" class="rounded-circle" alt="">
                </div>
                <div class="col-md-10 col-8 pl-md-4 pl-0">
                    <a class="nav-link mr-2 text-dark" href="{{ route('profile.open',$professionalDetail->user_id ) }}">
                        <div class="text-success">{{$professionalDetail->business_name}}</div>
                    </a>
                    <p class="text-warning">4.8
                    <i class="fa text-warning fa-star" aria-hidden="true"></i>
                    <i class="fa text-warning fa-star" aria-hidden="true"></i>
                    <i class="fa text-warning fa-star" aria-hidden="true"></i>
                    <i class="fa text-warning fa-star" aria-hidden="true"></i>
                    <i class="fa text-warning fa-star" aria-hidden="true"></i>
                    <small class="text-dark pl-2">
                        409 Reviews
                    </small>
                    </p>
                </div>
              </div>
              {{-- <div class="row">
                <div class="col-md-2 col-3">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <div class="col-md-10" style="margin-left: -47px; font-size:14px ;">
                  klsjd
                </div>
              </div> --}}
              <div class="row">
                <div class="col-md-6 pl-4">
                  <small class="text-secondary ml-4 pl-3">
                    – Grace G
                  </small>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                  <a href="#">
                    <small class="linktag" style="color: #007562;">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </small>
                  </a>
                </div>
              </div>
            </div>
            <!-- col 8 end here -->
            <div class="col-md-2 col-5">
              <div class="row">
                <div class="col-10">
                    <button class="btn btn-outline-success pl-1 pr-1 mt-3 pl-md-3 pr-md-3">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    Send Message
                    </button>
                </div>
              </div>
              <div class="row pt-4">
                <div class="col-1">
                  <i class="fa fa-phone fa-rotate-90" aria-hidden="true"></i>
                </div>
                <div class="col-md-11 col-6">
                  <small class="font-weight-lighter">
                    {{$professionalDetail->phone}}
                  </small>
                </div>
              </div>
              <div class="row pt-3">
                <div class="col-1">
                  <i class="fa fa-map-pin" aria-hidden="true"></i>
                </div>
                <div class="col-md-11 col-6">
                  <small class="">
                    {{$professionalDetail->country}}
                  </small>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endforeach
          @endforeach
          {{-- <hr class="pt-2 pb-3">
          <div class="row pb-5">
            <div class="col-md-4">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 h-100" src="{{asset('images/18.jpg')}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset('images/30.jpg')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset('images/19.jpg')}}" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- col 4 end here -->
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-1">
                  <img src="images/_.jpg" class="rounded-circle" alt="">
                </div>
                <div class="col-md-10 pl-4">
                  <div class="text-success">Capital Remodeling</div>
                <p class="text-warning">4.8
                  <i class="fa text-warning fa-star" aria-hidden="true"></i>
                  <i class="fa text-warning fa-star" aria-hidden="true"></i>
                  <i class="fa text-warning fa-star" aria-hidden="true"></i>
                  <i class="fa text-warning fa-star" aria-hidden="true"></i>
                  <i class="fa text-warning fa-star" aria-hidden="true"></i>
                  <small class="text-dark pl-2">
                    409 Reviews
                  </small>
                </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <div class="col-md-10" style="margin-left: -47px; font-size:14px ;">
                  Capital remodeling did a great job on our kitchen makeover! The team from start to finish were very personable...
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pl-4">
                  <small class="text-secondary ml-4 pl-3">
                    – Grace G
                  </small>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                  <a href="#">
                    <small class="linktag" style="color: #007562;">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </small>
                  </a>
                </div>
              </div>
            </div>
            <!-- col 8 end here -->
            <div class="col-md-2">
              <div class="row">
                <div class="col-12">
                  <button class="btn btn-outline-success pl-3 pr-3">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                      Send Message
                    </button>
                </div>
              </div>
              <div class="row pt-4">
                <div class="col-1">
                  <i class="fa fa-phone fa-rotate-90" aria-hidden="true"></i>
                </div>
                <div class="col-10">
                  <small class="font-weight-lighter">
                    View Phone Number
                  </small>
                </div>
              </div>
              <div class="row pt-3">
                <div class="col-1">
                  <i class="fa fa-map-pin" aria-hidden="true"></i>
                </div>
                <div class="col-10">
                  <small class="">
                    Hanover, Maryland
                    21076, United States
                  </small>
                </div>
              </div>
            </div>
          </div>
          <hr class="pt-2 pb-3">
          <div class="row pb-5">
            <div class="col-md-4">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 h-100" src="{{asset('images/18.jpg')}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset('images/30.jpg')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset('images/19.jpg')}}" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- col 4 end here -->
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-1">
                  <img src="images/_.jpg" class="rounded-circle" alt="">
                </div>
                <div class="col-md-10 pl-4">
                  <div class="text-success">Capital Remodeling</div>
                <p class="text-warning">4.8
                  <i class="fa text-warning fa-star" aria-hidden="true"></i>
                  <i class="fa text-warning fa-star" aria-hidden="true"></i>
                  <i class="fa text-warning fa-star" aria-hidden="true"></i>
                  <i class="fa text-warning fa-star" aria-hidden="true"></i>
                  <i class="fa text-warning fa-star" aria-hidden="true"></i>
                  <small class="text-dark pl-2">
                    409 Reviews
                  </small>
                </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <div class="col-md-10" style="margin-left: -47px; font-size:14px ;">
                  Capital remodeling did a great job on our kitchen makeover! The team from start to finish were very personable...
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pl-4">
                  <small class="text-secondary ml-4 pl-3">
                    – Grace G
                  </small>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                  <a href="#">
                    <small class="linktag" style="color: #007562;">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </small>
                  </a>
                </div>
              </div>
            </div>
            <!-- col 8 end here -->
            <div class="col-md-2">
              <div class="row">
                <div class="col-12">
                  <button class="btn btn-outline-success pl-3 pr-3">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                      Send Message
                    </button>
                </div>
              </div>
              <div class="row pt-4">
                <div class="col-1">
                  <i class="fa fa-phone fa-rotate-90" aria-hidden="true"></i>
                </div>
                <div class="col-10">
                  <small class="font-weight-lighter">
                    View Phone Number
                  </small>
                </div>
              </div>
              <div class="row pt-3">
                <div class="col-1">
                  <i class="fa fa-map-pin" aria-hidden="true"></i>
                </div>
                <div class="col-10">
                  <small class="">
                    Hanover, Maryland
                    21076, United States
                  </small>
                </div>
              </div>
            </div>
          </div> --}}
      </div>
    </section2>
    <!--End Body Content-->

    <!--Footer-->
    <footer id="footer">
        <div class="site-footer">
          <div class="container-fluid">
           <!--Footer Links-->
              <div class="footer-top">
                  <div class="row">
                      <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                          <h4 class="h4">Quick view</h4>
                            <ul>
                              <li><a href="#">Get Ideas</a></li>
                                <li><a href="#">Professional Profile</a></li>
                                <li><a href="#">Home Design Ideas</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Shop</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                          <h4 class="h4">Informations</h4>
                            <ul>
                              <li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                          <h4 class="h4">Customer Services</h4>
                            <ul>
                              <li><a href="#">Request Personal Data</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                          <h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                              <li><i class="icon anm anm-map-marker-al"></i><p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>(440) 000 000 0000</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>Mansoners@gmail.com</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
                <div class="footer-bottom">
                  <div class="row">
                      <!--Footer Copyright-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 copyright text-center"><span></span> <a href="templateshub.net">Mansoner</a></div>
                        <!--End Footer Copyright-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->

     <!-- Including Javascript -->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>

<!-- Including Jquery -->
<script src="{{asset('js/vendor/jquery-3.6.0.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<!-- <script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script> -->
<script src="{{asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery.cookie.js')}}"></script>
<script src="{{asset('js/vendor/wow.min.js')}}"></script>
<!-- Including Javascript -->
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/lazysizes.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/fontawesome.js')}}"></script>

</div>
</body>

<!-- belle/home6-modern.html   11 Nov 2019 12:28:16 GMT -->
</html>
