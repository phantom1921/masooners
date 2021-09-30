@include('manso.header')

<!-- carousel -->

<div class="container-fluid pt-2">
  <div class="row">
      <div class="col-md-12">
          <h2 class="text-secondary text-uppercase font-weight-bolder pt-4 pb-2">Home Design Ideas</h2>
      </div>
  </div>
</div>

    <div class="container-fluid">
    <div class="owl-carousel owl-theme ml-5 ml-md-0">
        @foreach($ideaCategories as $key => $ideaCategory)
        <div class="item">

            <div class="card" >
              <img class="card-img-top" src="{{ $ideaCategory->image->getUrl() }}" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">{{ $ideaCategory->title }}</h5>
              </div>

            </div>
          </div>
        @endforeach

  </div>
</div>

<!-- gallary Selector -->

<div class="container-fluid">

<div class="row">
  <div class="col-md-6">
    <div class="dropdown">
      <button class="btn btn-outline-secondary bg-white text-dark dropdown-toggle mt-3 mb-3 pl-4 pr-4 pt-2 pb-2" style="border-radius: 3px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Style
      </button>
      <div class="dropdown-menu "  aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" data-filter="all" href="#">All</a>
        @foreach($ideaStyles as $key => $ideaStyle)
        <a class="dropdown-item" data-filter="{{$ideaStyle->title}}" href="#">{{$ideaStyle->title}}</a>
        @endforeach
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
  <div class="col-md-2">
    <p class="" style="padding-top: 40px;">
      1 - 20 of 24,222,064 photos
    </p>
  </div>
</div>

<div class="product">
      @foreach($ideas as $key => $idea)

  <div class="itembox {{$idea->style->title}}"><img src="{{$idea->image->getUrl()}}" alt=""></div>
      @endforeach

</div>
</div>

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

   <!-- Including Jquery -->
   <script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
  <!-- <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/popper.min.js"></script> -->
   <script src="{{asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
   <script src="{{asset('js/vendor/jquery-3.6.0.js')}}"></script>
   <script src="{{asset('js/vendor/popper.min.js')}}"></script>
   <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
   <script src="{{asset('js/vendor/jquery.cookie.js')}}"></script>
   <script src="{{asset('js/vendor/wow.min.js')}}"></script>
   <!-- Including Javascript -->
   <script src="{{asset('js/plugins.js')}}"></script>
   <script src="{{asset('js/lazysizes.js')}}"></script>
   <script src="{{asset('js/main.js')}}"></script>
   <script src="{{asset('js/fontawesome.js')}}"></script>
   <script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script>
function filterSelection(c) {
  console.log(c);
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}
filterSelection("all")

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  console.log(name, element);
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}
</script>


<script>
  $(document).ready(function(){
    $('.dropdown-item').click(function(){
      const value = $(this).attr('data-filter');
      if(value == 'all'){
        $('.itembox').show('1000');
      }
      else{
        $('.itembox').not('.'+value).hide('1000');
        $('.itembox').filter('.'+value).show('1000');
      }
    })
  })


  $('.owl-carousel').owlCarousel({
    // loop:true,
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
            items:6
        },
        1500:{
            items:5
        }
    }
})
</script>

</body>

<!-- belle/home4-fullwidth.html   11 Nov 2019 12:25:38 GMT -->
</html>
