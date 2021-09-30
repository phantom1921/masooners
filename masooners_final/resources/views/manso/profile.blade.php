@include('manso.header')

      <div class="container">
        <div class="row pt-5">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-2">
                <img src="{{ $Profiles->profile_image->getUrl() }}"  width="135px" height="135px" id="topimg-box" alt="">
              </div>
              <div class="col-md-10">
                <div class="row mt-4">
                  <div class="col-md-6 pl-3">
                      <h3>
                        {{$Details->business_name}}
                      </h3>
                  </div>
                  <div class="col-md-2 offset-md-2">
                    <button class="btn btn-white"><i class="fa fa-upload" aria-hidden="true">&nbsp;&nbsp;Share</i></button>
                  </div>
                  <div class="col-md-2">
                    <button class="btn btn-white"><i class="far fa-heart">&nbsp;&nbsp;Save</i></button>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 pl-3">
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
                    <h6 class="text-secondary" style="margin-top: -13px;">
                      General Contractors
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 mb-0 pb-0">
                <button class="bg-white border-left-0 border-right-0 border-top-0 pl-0 pr-0 font-weight-bold mt-3" >About Us</button>
              </div>
              <div class="col-md-2 mb-0 pb-0">
                <button class="bg-white border-0 font-weight-bold mt-3" >Projects</button>
              </div>
              <div class="col-md-2 mb-0 pb-0">
                <button class="bg-white border-0 font-weight-bold mt-3" >Credentials</button>
              </div>
              <div class="col-md-2 mb-0 pb-0">
                <button class="bg-white border-0 font-weight-bold mt-3" >Reviews</button>
              </div>
            </div>
            <hr class="mt-0 pt-0">
            <div>
                    <div style="w-100">
                        {!! $Profiles->pro_about !!}
                    </div>

                    <button onclick="myFunction()" class="btnstyle d-block" id="myBtn">Read more</button>
            </div>
            <hr>

            <div class="row">
              <div class="col-md-12">
                <p class="h4 pb-4">8 Projects</p>
              </div>
            </div>
            <div class="row">
                {{--  @foreach($portfolios->project_images as $key => $media)  --}}


              <div class="card cardstyl">
                  {{-- {{ $portfolio->project_images[0]->getUrl() }} --}}
                <img class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">
                    {{--  {{$portfolio->name}}  --}}
                </h5>
                  <p class="card-text">5 photos</p>
                </div>
              </div>
              {{--  @endforeach  --}}
              <div class="card cardstyl">
                <img class="card-img-top" src="{{asset('/images/13.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">5 photos</p>
                </div>
              </div>
              <div class="card cardstyl">
                <img class="card-img-top" src="{{asset('/images/13.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">5 photos</p>
                </div>
              </div>
              <div class="card cardstyl">
                <img class="card-img-top" src="{{asset('/images/13.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">5 photos</p>
                </div>
              </div>
              <div class="card cardstyl">
                <img class="card-img-top" src="{{asset('/images/13.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">5 photos</p>
                </div>
              </div>
              <div class="card cardstyl">
                <img class="card-img-top" src="{{asset('/images/13.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">5 photos</p>
                </div>
              </div>
            </div>

          </div>
          <!-- section diffrence  -->
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12 ml-5 mr-5 pt-3 pb-3" id="formbox">
                <h6 class="pt-2 pb-3">
                  Contact Capital Remodeling
                </h6>
                <button class="btn">
                  Send Message
                </button>
              </div>
            </div>

            <section class="pl-3 mt-4" id="formbox1">
              <div class="row mt-4">
                <div class="col-md-12 pb-0">
                  <i class="fa fa-phone" aria-hidden="true"><a href="#" class="text-dark font-weight-light fa-rotate-120">&nbsp;&nbsp; {{$Details['phone']}}</a></i>
                  <hr>
                  <i class="fas fa-globe    "> <a href="#" class="text-dark font-weight-light"> &nbsp;&nbsp;Website</a></i>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-1">
                  <i class="fa fa-map-pin" aria-hidden="true"></i>
                </div>
                <div class="col-10">
                  <small class="">
                    {{$Details['country']}}
                  </small>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-8">
                  <i class="fas fa-users "> <a href="#" class="text-dark font-weight-light"> &nbsp;&nbsp;38 Followers</a></i>
                </div>
                <div class="col-md-4">
                  <small class="btn btn-outline-white mt-0 pt-1 pb-1"><i class="fa fa-plus" aria-hidden="true">Follow</i></small>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>


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

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://use.fontawesome.com/8d7882db98.js"></script> --}}


    <script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/fontawesome.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

    <script>
      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
        }
      }
      </script>
</body>

<!-- belle/home7-shoes.html   11 Nov 2019 12:30:10 GMT -->
</html>
