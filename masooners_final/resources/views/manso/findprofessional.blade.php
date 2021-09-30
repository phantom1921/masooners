@include('manso.header')
<!-- page top carousel -->

<section class="carusel-height">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('images/topcrusl6.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('/images/topcrusl5.jfif')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('/images/topcrsul4.jfif')}}" alt="Third slide">
      </div>
    </div>
  </div>
</section>

<!-- page top carousel  end-->

<!-- Home Design & Remodeling -->

@foreach($categories as $key => $Category)
<div class="container pt-2">
<div class="row">
  <div class="col-md-12 text-center text-md-left">
      <h2 class="text-secondary text-uppercase font-weight-bolder pt-4 pb-2">{{$Category->name}}</h2>
  </div>
</div>
</div>
<div class="container">
<div class="row">
    <div class="col-md-12 offset-2 offset-md-0 col-10">
        <div class="owl-carousel owl-theme">
            @foreach($proSubCategories as $key => $proSubCategory)
            @if ($proSubCategory->prof_category_id==$Category->id)
            <div class="item">
            <a class="mr-2 text-dark" href="{{ route('professionals.open',['id'=>$proSubCategory->id]) }}">
            <div class="card" >
              <img class="card-img-top" src="{{$proSubCategory->image->geturl()}}" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">{{$proSubCategory->name}}</h5>
              </div>

            </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
    </div>
</div>
</div>
@endforeach

<!-- carousel section end -->

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



<!-- Including Javascript -->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>

<!-- Including Jquery -->
<script src="{{asset('js/vendor/jquery-3.6.0.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery.cookie.js')}}"></script>
<script src="{{asset('js/fontawesome.js')}}"></script>
<script src="{{asset('js/vendor/wow.min.js')}}"></script>
<!-- Including Javascript -->
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/lazysizes.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>


<script>
$('.owl-carousel').owlCarousel({
 margin:10,
 nav:false,
 dots:false,
 responsive:{
     0:{
         items:1
     },
     600:{
         items:3
     },
     1000:{
         items:4
     }
 }
})
</script>

</body>

<!-- belle/home4-fullwidth.html   11 Nov 2019 12:25:38 GMT -->
</html>
