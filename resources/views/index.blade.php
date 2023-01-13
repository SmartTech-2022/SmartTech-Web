@extends('layouts2.app')

@section('content')

    <div class="row mx-4 my-5">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <p id="p1-custom" class="roboto">Your Vote, Your Right</p>
            <p id="p2-custom" class="roboto">Future voting systems, paving the path for worldwide expansion, precise analysis, and more top-notch services.</p>
            <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
            <!-- <form class="form-inline">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form> -->
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 offset-lg-2 offset-md-2">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <img class="img-fluid" src="{{ asset('image/undraw_election_day_w842.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-4">
                    <img class="img-fluid" src="{{ asset('image/undraw_voting_nvu7.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <img class="img-fluid" src="{{ asset('image/undraw_selecting_team_re_ndkb.png')}}" alt="">
                </div>
            </div>    
        </div>
    </div>

    <!-- <div class="row mx-4 mt-3">
        <div class="col-lg-5 col-md-5 col-sm-5 px-0">
            <a href="">
                <img class="img-fluid custom-height" src="{{ asset('image/image 1.png')}}" alt="" >
            </a>
            
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 px-0">
            <a href="">
                <img class="img-fluid custom-height" src="{{ asset('image/image 2-1.png')}}" alt="" >
            </a>     
        </div>
    </div> -->

    <div class="row mx-4 mt-5">
        <div class="col-lg-3 col-md-6 p-1">
            <a href="">
                <img class="img-fluid custom-height" src="{{ asset('image/compiled Rectangle 275.png')}}" alt="" >
            </a>            
        </div>
        <div class="col-lg-3 col-md-6 p-1">
            <a href="">
                <img class="img-fluid custom-height" src="{{ asset('image/compiled Rectangle 276.png')}}" alt="" >
            </a>            
        </div>
        <div class="col-lg-3 col-md-6 p-1">
            <a href="">
                <img class="img-fluid custom-height" src="{{ asset('image/compiled Rectangle 277.png')}}" alt="" >
            </a>            
        </div>
        <div class="col-lg-3 col-md-6 p-1">
            <a href="">
                <img class="img-fluid custom-height" src="{{ asset('image/compiled Rectangle 278.png')}}" alt="" >
            </a>            
        </div>
    </div>

    <div class="row mt-3">
        <div class="col d-flex justify-content-center">
            <div id="whyChooseUs" class="roboto">Why Choose Us</div>
        </div>
    </div>
     
    <div class="row mx-4 mt-3">
        <div class="col-lg-4 col-md-6 p-1">
            <img class="img-fluid" src="{{ asset('image/group 82.png')}}" alt="" >            
        </div>
        <div class="col-lg-4 col-md-6 p-1">
            <img class="img-fluid" src="{{ asset('image/group 83.png')}}" alt="" >            
        </div>
        <div class="col-lg-4 col-md-12 p-1">
            <img class="img-fluid" src="{{ asset('image/group 84.png')}}" alt="" >            
        </div>
    </div>

    <!-- <div class="row mx-4 mt-3">
        <div class="col-lg-4 offset-lg-4 d-flex justify-content-center p-2" id="purposeDiv">
            <div class="row">
                <div class="col">                    
                    <div class="border border-success border-2 m-2 text-center">
                        <h6><strong>Register to vote now</strong></h6>
                        <p>For Nigerians who want to vote in 2023 Election</p>
                    </div>
                    <div class="border border-success border-2 m-2 text-center">
                         <h6><strong>Register to vote now</strong></h6>
                        <p>for anyone who wants to vote in BBNaija 2023 Eviction</p>
                    </div>
                    <div class="border border-success border-2 m-2 text-center">
                        <h6><strong>Check your Registeration status</strong></h6>
                        <p>for registered voters who wants to confirm their email</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-4 mt-3">
        <div class="col-12 bg-secondary border-top border-5 border-primary text-light">
            warning
        </div>
        <div class="col-12 my-2">
            <p>Please do NOT use this form to register or re-register to vote if you are not 18+ or you are enrolled in a confidential address program such as safe at home. If sharing your address could put you in life-threatening danger, you may be eligible to register to vote confidential.
            </p>
            <p>For more information kindly visit any of our branch offices, call or whatsapp +2348000088800</p>
        </div>
    </div> -->


    <footer id="footerbg" class="mx-4 mt-4">
        <div class="row">
            <div class="col-lg-4 text-light">
                <div class="m-3" class="roboto">
                    SiteMap
                    Career Opportunities
                    Site Maintenance Schedules 
                    Language Access Complaint Form 
                    Guidelines For Access to Public Record
                </div>
            </div>
             <div class="col-lg-4">
                <div class="m-3">
                    <img class="img-fluid" src="{{ asset('image/twitter.png')}}" alt="">
                    <img class="img-fluid" src="{{ asset('image/facebook.png')}}" alt="">
                    <img class="img-fluid" src="{{ asset('image/instagram.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
             <form>
                 <div class="form-group m-3">
                   <input type="text" class="form-control" id="Name" placeholder="Name">
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
                 <button type="submit" class="btn btn-primary m-3" class="roboto">Submit</button>
             </form>            
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <p class="text-light" class="roboto">
                    Copyright 2022 ONEVOTE Ministry Of science And Technology     Delta State Innovation Hub, DBS 
                    Junction, Asaba, Delta State 223323      234-77608879
                </p>
            </div>
        </div>
    </footer>

</section>

@endsection