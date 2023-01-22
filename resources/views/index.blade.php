@extends('layouts2.app')

@section('content')

    <div class="row mx-2 my-2">
        <div class="col-lg-5 col-md-5 col-sm-12 px-3">
            <div class="container">
                <p id="p1-custom" class="roboto text-success"><span class="typed-text">
                    </span><span class="cursor"> </span></p>
            </div>
            <h4  class="roboto pb-4 mb-4" id="futureVoting">Future voting systems, paving the path for worldwide expansion, precise analysis, and more top-notch services.
            </h4>
            <div class="pb-4 d-flex justify-content-left">
                <br>
                <a href="#download">
                    <button class="btn btn-success btn-lg px-5" type="submit">Get Started</button>
                </a>
            </div>

            </div>
        <div class="col-lg-5 col-md-5 col-sm-12 offset-lg-2 offset-md-2">

                <div class="col d-flex justify-content-lg-center d-flex justify-content-md-center">
                    <img class="img-fluid" src="{{ asset('image/webhero.png')}}" alt="">
                </div>



            </div>


        </div>

        <hr>




    <div class="row" id="download">
        <div style="font-family: 'Roboto'; font-style: normal; font-weight: 400; font-size: 23px; line-height: 162.69%; text-align: justify; color: #000000;">
            <p class="card card-body">
                If you are already a Registered Voter Kindly Download our App on
                Google Play store or  Appstore to  Log in, Vote for your Preferred Candidate or Political Party and also View Election Results.
            </p>


        </div>
    </div>

<div class="row container fluid d flex-justify-content-end">
        <div class=" container-fluid col-md-4 ">
            <img class="img-fluid custom-height-100px" src="{{ asset('image/Group 2web.png')}}" alt="">

    </div>
    <br>
    <div class="row  m-4 p-4  ">
        <div class="col-auto">
            <a href="http://play.google.com">
                <img class="img-fluid custom-height" src="{{ asset('image/playstoreButton.png')}}" alt="" >
            </a>
        </div>



        <div class="col-auto">
            <a href="https://www.apple.com ">
                <img class="img-fluid custom-height" src="{{ asset('image/appstoreButton.png')}}" alt="" >
            </a>
        </div>
        <br>
    </div>
</div>   <hr>



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
    <hr>



    <div class="row mx-4 my-5"   style="font-family: 'Roboto'; font-style: normal; font-weight: 400; font-size: 23px; line-height: 162.69%;  color: #000000;">
        <div class="col" >
            <h1 id="AboutUs" class="d-flex justify-content-center">About Us</h1>
            <p class="card card-body "> OneVote is a secure online voting platform that makes it easy to run elections at a fraction of the usual cost. We're the leading provider of ranked choice elections, which help organisations achieve a more democratic outcome by better representing the will of the voters.
            </p>
        </div>
    </div>
<hr>

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
<footer class=" text-center text-white" style="background-color:#027314; ">

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
              <input type="email" id="form5Example21" class="form-control" placeholder="Enter Your Email Address Here" />
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
      <a href="https://www.facebook.com"><img class="img-fluid px-3" style="height:20px" src="{{ asset('image/facebook.png')}}" alt=""></a>

      <!-- Twitter -->
      <a href="https://twitter.com"><img class="img-fluid px-3" style="height:20px" src="{{ asset('image/twitter.png')}}" alt=""></a>

      <!-- Instagram -->
      <a href="https://www.instagram.com"><img class="img-fluid px-3" style="height:20px" src="{{ asset('image/instagram.png')}}" alt=""></a>

    </section>
    <!-- Section: Social media -->

  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 eVotes powered by SmartTech, Inc
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->




</section>


@endsection
