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

    <div class="row mx-4 mt-3">
        <div class="col">
            <a href="">
                <img class="img-fluid custom-height" src="{{ asset('image/mobile store button AS.png')}}" alt="" >
            </a>
            
        </div>
        <div class="col d-flex justify-content-end">
            <a href="">
                <img class="img-fluid custom-height" src="{{ asset('image/mobile store button ps.png')}}" alt="" >
            </a>     
        </div>
    </div>

    <!-- <div class="row mx-4 mt-5">
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
    </div> -->

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

    <div class="row mx-4 my-5">
        <div class="col-lg-6 col-md-6" id="aboutUs">
            <h4>About Us</h4>
            <p> OneVote is an Electronic voting platform where anyone can cordinate their campaign easily. We help our users to find out the majority opinion of a group as easily and reliably as possible, no matter how large the number of participants is.
            </p>
            <p>
            OneVote is operated by SmartTech group. We are currently one of the teams in Delta state innovation Hub Asaba, We have the Capacity to Reach out to the nation with our software products at maximum capacity. Our mission is to make interaction in larger groups as easy as possible. To achieve this, we build an electronic voting tools that everyone can easily participate in. We value reliability, precision and fast work and don't need complicated structures in the company. This allows us to work in a very agile way and implement new ideas quickly and easily.
            </p>

        </div>
    </div>

    <!-- <div class="row mx-4 mt-3">
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
                 <div class="form-group m-3" id="contactUs">
                    <textarea name="message" id="" cols="30" rows="3" placeholder="Message" class="form-control"></textarea>
                   <!-- <input type="text" class="form-control" id="Message" placeholder="Message"> -->
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