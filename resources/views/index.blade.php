@extends('layouts2.app')

@section('content')

    <div class="row mx-4 my-5">
        <div class="col-lg-5 col-md-5 col-sm-12 px-5">
            <p id="p1-custom" class="roboto">Your Vote, Your Right</p>
            <p id="p2-custom" class="roboto" id="futureVoting">Future voting systems, paving the path for worldwide expansion, precise analysis, and more top-notch services.
            </p>
            <div class="d-flex justify-content-center">
                <a href="#download">
                    <button class="btn btn-success btn-lg px-5" type="submit">Getting started</button>
                </a>
            </div>

        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 offset-lg-2 offset-md-2">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <img class="img-fluid" src="{{ asset('image/laptop.png')}}" alt="">
                </div>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-lg-4 col-md-4">
                    <img class="img-fluid" src="{{ asset('image/undraw_voting_nvu7.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-4">
                    <img class="img-fluid" src="{{ asset('image/phone.png')}}" alt="">
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <img class="img-fluid" src="{{ asset('image/lady standing.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-4">
                    <img class="img-fluid" src="{{ asset('image/phone.png')}}" alt="">
                </div>
            </div>
    
            </div>
        </div><br>
        



    <div class="row mx-4 my-5">
        <div class="col-lg-6 col-md-6" id="voteForYour">
            <p> Vote for your favourite Candidate or political Party, If you’re a registered voter kindly download our app in Google Play store or Apple Appstore, simply log in and cast your vote.
            </p>
        </div>
    </div>

    <div class="row mx-4 mt-3" id="download">
        <div class="col">
            <a href="">
                <img class="img-fluid custom-height" src="{{ asset('image/playstoreButton.png')}}" alt="" >
            </a>
            
        </div>
        <div class="col d-flex justify-content-end">
            <a href="">
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
                <img class="img-fluid" id="WCUI" src="{{ asset('image/group 82.png')}}" alt="" >            
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <img class="img-fluid" id="WCUI" src="{{ asset('image/group 83.png')}}" alt="" >            
            </div>
            <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                <img class="img-fluid" id="WCUI" src="{{ asset('image/group 84.png')}}" alt="" >            
            </div>
        </div>




    <!-- <div class="row mx-4 mt-3">
        <div class="col">
                <img class="img-fluid custom-height" src="{{ asset('image/registerToVote.png')}}" alt="" >        
        </div>
        <div class="col">
                <img class="img-fluid custom-height" src="{{ asset('image/viewLive.png')}}" alt="" >
        </div>
        <div class="col">
                <img class="img-fluid custom-height" src="{{ asset('image/forReg.png')}}" alt="" >
        </div>
    </div> -->

    <div class="row mx-4 my-5">
        <div class="col-lg-6 col-md-6" id="voteForYour">
            <p> OneVote is a secure online voting platform that makes it easy to run elections at a fraction of the usual cost. We're the leading provider of ranked choice elections, which help achieve more democratic outcomes by better representing the will of your voters.
            </p>
        </div>
    </div>

    <!-- <div class="row mx-4 mt-3">
        <div class="col-12 bg-secondary text-danger">
            warning
        </div>
        <div class="col-12 my-2">
            <p>Please do NOT use this form to register or re-register to vote if you are not 18+ or you are enrolled in a confidential address program such as safe at home. If sharing your address could put you in life-threatening danger, you may be eligible to register to vote confidential.
            </p>
            <p>For more information kindly visit any of our branch offices, call or whatsapp +2348000088800</p>
        </div>
    </div> -->

<div class="container-fluid">
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
</div>




</section>
                        

@endsection
