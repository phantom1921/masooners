<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Multi Step Form | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

        {{-- stepform css --}}
        <link rel="stylesheet" href="{{asset('css/stepform.css')}}">

   </head>
   <body>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Launch demo modal
    </button>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="container">
            <header class="text-warning">M A S O N E R S</header>
            <div class="form-outer">
               <form action="#">
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
                      <input type="text" class="w-50 text-center" placeholder="####">
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
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            Remodel entire home
                          </label>
                        </div>
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            Remodel a few rooms
                          </label>
                        </div>
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                            Remodel one room
                          </label>
                        </div>
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                            Reconfigure the current floor plan
                          </label>
                        </div>
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
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
                      What is the purpose of this project?
                     </div>
                     <div class="field small">
                      <p class="p-0 m-0">Select all that apply</p>
                      </div>
                      <div class="list_1">
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                            Design service
                          </label>
                        </div>
                        <div class="form-check rounded">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
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
                      <p class="p-0 m-0 ml-4">Select all that apply</p>
                      </div>
                      <div class="row">
                        <div class="offset-2 mt-0 col-md-4">
                          <button class="pl-5 pr-5 pt-2 pb-2 mb-3 btn w-100 btn-outline-secondary"> Kitchen </button>
                          <button class="pl-5 pr-5 pt-2 pb-2 mb-3 btn w-100 btn-outline-secondary"> Kitchen </button>
                          <button class="pl-5 pr-5 pt-2 pb-2 mb-3 btn w-100 btn-outline-secondary"> Kitchen </button>
                        </div>
                        <div class="col-md-4">
                          <button class="pl-5 pr-5  pt-2 pb-2 mb-3 btn w-100 btn-outline-secondary">Bathroom</button>
                          <button class="pl-5 pr-5  pt-2 pb-2 mb-3 btn w-100 btn-outline-secondary">Bathroom</button>
                          <button class="pl-5 pr-5  pt-2 pb-2 mb-3 btn w-100 btn-outline-secondary">Bathroom</button>
                        </div>
                      </div>
                     <div class="field btns">
                        <button class="prev-3 prev">Previous</button>
                        <button class="submit">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>
      <script src="{{asset('js/stepform.js')}}"></script>
      <script src="{{asset('js/vendor/jquery-3.6.0.js')}}"></script>
      <script src="{{asset('js/vendor/popper.min.js')}}"></script>
      <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
         </body>
</html>

