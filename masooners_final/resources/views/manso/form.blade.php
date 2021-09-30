@include('manso.header')

<div class="container-fluid bgimg">
    <div class="row pt-5 pb-5">
        <div class="col-md-12 pt-5 pb-5">
          <!-- inner container -->
          <div class="container">
            <!-- main heading -->
            <div class="row">
              <div class="col-md-12 text-center justify-content-center">
              <h2>Let's find professionals for your home project</h2>
              </div>
            </div>
            <!-- steps describe in header -->
            <div class="row text-center">
              <div class="offset-md-2 col-md-2">
                <div class="forminner-content">
                  <div class="content-info">
                    <div class="info-step">
                      <div class="content-step">
                        <div class="circle">
                          <div class="circletext">
                            1
                          </div>
                        </div>
                      </div>
                      <div class="desc">
                        Pick the service you need and location
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2 pl-md-5">
                <div class="forminner-content">
                  <div class="content-info">
                    <div class="info-step">
                      <div class="content-step">
                        <div class="circle">
                          <div class="circletext">
                            2
                          </div>
                        </div>
                      </div>
                      <div class="desc">
                        Answer questions about your project
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             <div class="col-md-2 pl-md-5 ml-md-5">
              <div class="forminner-content">
                <div class="content-info">
                  <div class="info-step">
                    <div class="content-step">
                      <div class="circle">
                        <div class="circletext">
                          3
                        </div>
                      </div>
                    </div>
                    <div class="desc">
                      Get connected with pros for free
                    </div>
                  </div>
                </div>
              </div>
             </div>
             <div class="col-md-2"></div>
            </div>
            <!-- search section in header -->
            <div class="row">
              <div class="col-md-12">
                <div class="input_form" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                  <div class="form_box">
                    <div class="form_field">
                      <div class="inner_box">
                        <input type="text" class="input_first" placeholder="What project do you need help with?">
                      </div>
                    </div>
                    <div class="field-2">
                      <i class="fa fa-map-marker map_position" aria-hidden="true"></i>
                      <input class="maplocation" placeholder="38000">
                    </div>
                    <div class="field-3">
                      <button class="btn btn-block btn-lg manso_searchbutton text-white" type="button">Get Started</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- search section end -->
          </div>
        </div>
    </div>
</div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="containerstepform">
            <header class="text-warning">M A S O N E R S</header>
            <div class="form-outer">
               <form action="{{ route("inquiry.open") }}" method="POST">
                @csrf
                  <div class="page slide-page">
                     <div class="title text-center">
                        Answer a few questions to get matched with professionals near you
                     </div>
                     <div class="field1">
                        <div class="label">
                          Please confirm your project zip code
                        </div>
                     </div>
                     <div class="field1">
                      <input type="text" class="w-75 text-center" name="location" placeholder="####">
                     </div>
                     <div class="field1">
                      <input type="email" class="w-75 text-center" name="email" placeholder="Enter Your Email Address">
                     </div>
                     <div class="field1">
                      <input type="text" class="w-75 text-center" name="name" placeholder="Enter Your Full Name">
                     </div>
                     <div class="field_button">
                        <button class="firstNext next">Next</button>
                     </div>
                  </div>
                  <div class="page2">
                     <div class="title">
                      What is the purpose of this project?
                     </div>
                     <div class="field small">
                      <p class="p-0 m-0">Select all that apply</p>
                      </div>
                      <div class="list_1">
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="purpose" id="purpose" value="Remodel entire home" checked>
                            Remodel entire home
                          </label>
                        </div>
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="purpose" id="purpose" value="Remodel a few rooms">
                            Remodel a few rooms
                          </label>
                        </div>
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="purpose" id="purpose" value="Remodel one room">
                            Remodel one room
                          </label>
                        </div>
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="purpose" id="purpose" value="Reconfigure the current floor plan">
                            Reconfigure the current floor plan
                          </label>
                        </div>
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="purpose" id="purpose" value="Remodel as part of home addition or extension">
                            Remodel as part of home addition or extension
                          </label>
                        </div>
                      </div>
                     <div class="field btns">
                        <button class="prev-1 prev">Previous</button>
                        <button class="next-1 next">Next</button>
                     </div>
                  </div>
                  <div class="page3">
                    <div class="title">
                      Select your service
                     </div>
                     <div class="field small">
                      <p class="p-0 m-0">Select all that apply</p>
                      </div>
                      <div class="list_1">
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="service[]" id="gridcheck" value="Design service" checked>
                            Design service
                          </label>
                        </div>
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="service[]" id="gridcheck" value="Construction service">
                            Construction service
                          </label>
                        </div>
                      </div>
                     <div class="field btns">
                        <button class="prev-2 prev">Previous</button>
                        <button class="next-2 next">Next</button>
                     </div>
                  </div>
                  <div class="page4">
                    <div class="title">
                      What type of room(s) do you want to remodel?
                    </div>
                    <div class="field small">
                      <p >Select all that apply</p>
                    </div>
                    <div class="row">
                        <div class="offset-1 mt-0 col-md-5 list_1">
                            <div class="form-check rounded">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="appartment[]" id="room" value="Bathroom">
                                    Bathroom
                                </label>
                              </div>
                            <div class="form-check rounded">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="appartment[]" id="room" value="Kitchen">
                                   Kitchen
                                </label>
                              </div>
                            <div class="form-check rounded">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="appartment[]" id="room" value="LivingRoom">
                                  Living Room
                                </label>
                              </div>
                            <div class="form-check rounded">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="appartment[]" id="room" value="bedroom">
                                  Bedroom
                                </label>
                              </div>
                        </div>
                        <div class="col-md-5 list_1">
                            <div class="form-check rounded">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="appartment[]" id="room" value="Home_office">
                                    Home office
                                </label>
                              </div>
                            <div class="form-check rounded">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="appartment[]" id="room" value="Office">
                                    Office
                                </label>
                              </div>
                              <div class="form-check rounded">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="appartment[]" id="room" value="Dining Room">
                                  Dining Room
                                </label>
                              </div>
                              <div class="form-check rounded">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="appartment[]" id="room" value="Garage">
                                  Garage
                                </label>
                              </div>
                        </div>
                    </div>
                    <div class="field btns">
                        <button class="prev-3 prev">Previous</button>
                        <button class="submit" id="submit_alert">Submit</button>
                    </div>
                  </div>
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- page header end -->

<!-- body main section start -->

<!-- Question start -->
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5 text-center" >
      <h4>
        Why find professionals on masoners?
      </h4>
    </div>
  </div>
  <!-- Question end -->

  <!-- hr tag start -->
  <div class="row">
    <div class="offset-md-5 col-md-2">
      <hr class="hr-border text-center mt-5 mb-5">
    </div>
  </div>
  <!-- hr tag end -->

  <!-- Some description -->
  <div class="row">
    <div class="col-md-12 text-center">
      <p class="h5">Hire Confidently</p>
    </div>
  </div>
  <div class="row">
    <div class="offset-md-3 col-md-6">
      <p class="mt-2 text-center">Easily browse photos of completed projects & read reviews from real homeowners so you can trust that you're hiring the best pro for the job</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center mt-4">
      <p class="h5">Budget Smart</p>
    </div>
  </div>
  <div class="row">
    <div class="offset-md-3 col-md-6">
      <p class="mt-2 text-center">Get familiar with typical project costs in your area and read expert tips on how to budget your next home project</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center mt-4">
      <p class="h5">Pros Who Meet Your Needs</p>
    </div>
  </div>
  <div class="row">
    <div class="offset-md-3 col-md-6">
      <p class="mt-2 text-center">Get connected with expert home pros based on specific project needs including budget & location</p>
    </div>
  </div>

  <!-- lower hr  -->
  <div class="row">
    <div class="offset-md-5 col-md-2">
      <hr class="hr-border text-center mt-5 mb-5">
    </div>
  </div>
  {{-- hr end --}}
</div>
<!-- main body section end here start  -->

<!-- footer start  -->
<footer class="bg_color">
  <div class="container">
    <div class="row ">
      <div class="col-md-12 text-center mt-4 mb-4">
        <p class="h5">Are you a quality professional?</p>
        <a href="#">Join our professional network</a>
      </div>
    </div>
  </div>
</footer>
<!-- footer start end -->



<script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/stepform.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $('#submit_alert').click(function(){
        swal({
        title: "Request Accepted!",
        text: "Query Added Successfully!",
        icon: "success",
        button: "Close!",
});
 });

</script>

</body>

<!-- belle/home4-fullwidth.html   11 Nov 2019 12:25:38 GMT -->
</html>
