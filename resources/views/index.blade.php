@extends('layouts2.app')

@section('content')

    <div class="row mx-4 my-5">
        <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="mb-5">
                <h1 id="h1-custom" class="roboto">Your Vote, Your Right</h1>
                <p id="p2-custom" class="roboto">Future voting systems, paving the path for worldwide expansion, precise analysis, and more top-notch services.
                </p>
                <div class="my-5 d-flex justify-content-center">
                    <a href="#download">
                        <button class="btn btn-success btn-lg px-5" type="submit">Getting started</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 offset-lg-2 offset-md-2">
            <div class="row">
                <div class="col d-flex justify-content-lg-center d-flex justify-content-md-center">
                    <img class="img-fluid" src="{{ asset('image/laptop.png')}}" alt="">
                </div>
            </div>
            <div class="row d-flex justify-content-lg-around d-flex justify-content-md-around">
                <div class="col-lg-4 col-md-4">
                    <img class="img-fluid" src="{{ asset('image/undraw_voting_nvu7.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-4">
                    <img class="img-fluid" src="{{ asset('image/phone.png')}}" alt="">
                </div>
            </div>

            <div class="row d-flex justify-content-lg-center d-flex justify-content-md-center">
                <div class="col-lg-4 col-md-4">
                    <img class="img-fluid" src="{{ asset('image/lady standing.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-4">
                    <img class="img-fluid" src="{{ asset('image/undraw_selecting_team_re_ndkb.png')}}" alt="">
                </div>
            </div>
    
            </div>
        </div><br>
        



    <div class="row mx-4 my-5" id="download">
        <div class="custom-text3">
            <p> Vote for your favourite Candidate or political Party, If you’re a registered voter kindly download our app in Google Play store or Apple Appstore, simply log in and cast your vote.
            </p>
        </div>
    </div>

    <div class="row mx-4 mt-3">
        <div class="col">
            <a href="http://play.google.com">
                <img class="img-fluid custom-height" src="{{ asset('image/playstoreButton.png')}}" alt="" >
            </a>
            
        </div>
        <div class="col d-flex justify-content-end">
            <a href="https://www.apple.com ">
                <img class="img-fluid custom-height" src="{{ asset('image/appstoreButton.png')}}" alt="" >
            </a>     
        </div>
    </div><br>



    <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <div id="whyChooseUs" class="roboto">Why Choose Us</div>
            </div>
        </div>
         
        <div class="row mx-4 mt-3">
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <img class="img-fluid p-3" id="WCUI" src="{{ asset('image/Group 82.png')}}" alt="" >            
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <img class="img-fluid p-3" id="WCUI" src="{{ asset('image/Group 83.png')}}" alt="" >            
            </div>
            <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                <img class="img-fluid p-3" id="WCUI" src="{{ asset('image/Group 84.png')}}" alt="" >            
            </div>
        </div>



    <div class="row mx-4 my-5 custom-text3" id="AboutUs">
        <div class="col">
            <h1>About Us</h1>
            <p> OneVote is a secure online voting platform that makes it easy to run elections at a fraction of the usual cost. We're the leading provider of ranked choice elections, which help achieve more democratic outcomes by better representing the will of your voters.
            </p>
        </div>
    </div>


<!-- <div class="container-fluid">

    <footer class="mt-4">
        <div class="row">
            <div class="col-lg-3 text-light" id="footerBg1">
                <div class="m-3" class="roboto">
                    SiteMap
                    Career Opportunities
                    Site Maintenance Schedules 
                    Language Access Complaint Form 
                    Guidelines For Access to Public Record
                </div>
            </div>
             <div class="col-lg-5" id="footerBg2">
                <div class="my-5">
                    <div class="m-3 d-flex justify-content-end">
                        <a href=""><img class="img-fluid px-3" id="SMI" src="{{ asset('image/twitter.png')}}" alt=""></a>
                        <a href=""><img class="img-fluid px-3" id="SMI" src="{{ asset('image/facebook.png')}}" alt=""></a>
                        <a href=""><img class="img-fluid px-3" id="SMI" src="{{ asset('image/instagram.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col d-flex justify-content-center">
                        <p class="text-light" class="roboto">
                          Copyright &#169; 2022 ONEVOTE
                        </p>
                    </div>
                </div>
             </div>
            <div class="col-lg-4" id="footerBg3">
             <form>
                 <div class="form-group m-3" id="contactUs">
                   <input type="text" class="form-control" id="Message" placeholder="Message">
                 </div>
                <div class="form-group m-3">
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                 <div class="form-check m-3">
                   <input type="checkbox" class="form-check-input" id="checkbox">
                   <label class="form-check-label text-light" for="checkbox" class="roboto">
                    Yes, I want to receive news and communications for about the Nigeria Elections and Others.
                   </label>
                 </div>
                 <button type="submit" class="btn btn-primary mx-3 my-2" class="roboto">Submit</button>
             </form>            
            </div>
        </div>

    </footer>
    
</div> -->

    <!-- Footer -->
<footer class="bg-success text-center text-white">

    <!-- Section: Form -->
    <section class="pt-5">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" placeholder="enter email" />
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
      
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a href="https://www.facebook.com"><img class="img-fluid px-3" id="SMI" src="{{ asset('image/facebook.png')}}" alt=""></a>

      <!-- Twitter -->
      <a href="https://twitter.com"><img class="img-fluid px-3" id="SMI" src="{{ asset('image/twitter.png')}}" alt=""></a>

      <!-- Instagram -->
      <a href="https://www.instagram.com"><img class="img-fluid px-3" id="SMI" src="{{ asset('image/instagram.png')}}" alt=""></a>

    </section>
    <!-- Section: Social media -->

  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: ONEVOTE
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->




</section>
                        

@endsection
