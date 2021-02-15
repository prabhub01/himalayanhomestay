@extends('layout')

@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="" style="background-image: url({{ asset('images/banner1.jpg') }});"></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">About Us</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                <i class="fa fa-arrow-right" aria-hidden="true" style="color: rgb(255, 255, 255);"></i>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

         <!--================ About History Area  =================-->
         <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">About Us</h2>
                            <p style="text-align: justify;">Hi I am Laxman Basnet, permanent resident from Banepa. I have a lovley family including 
                                my wife Chandika, daughter Sasmini, and son Sasman.  My family has been living on this land since the mid 1800's and 
                                are active members of our community. Walking up to our residence you will be greeted by our extended family of 
                                grandparents, aunts, uncles,and cousins all whom live in our village and help manage our four acres of farming land.  
                                We grow all of our food organically and produce potato, rice, wheat and vegitables.  Hopefully someday soon we will 
                                have fruit trees!  We have our own cows to make homemade curd(yogurt), ghee(butter), and of course milk. We also have 
                                chickens for eggs and goats for meat.<br> <br>
                                I am mixed martial artist Taekwondo 6th degree black belt.  I have been teaching the children Taekwondo in the local schools 
                                for 25 years.  My children teach now as well and are also black belts who compete internationally.   Mixed martial art 
                                accomplishments include: National Player, 1st International Medalist for Nepal in ITF Taekwondo, World Championship Medalist 
                                and only Nepali inducted into the Taekwondo Hall Of Fame. My skills have given me the opportunity to act in two nepali movies. 
                                I have visited around 25 countries so I have no problem relating to people of other cultures.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('images/family.jpg') }}" alt="image not found">
                        <img class="img-fluid" src="{{ asset('images/family1.JPG') }}" alt="image not found" style="margin-top: 10px;">
                        
                    </div>
                </div>
            </div>
        </section>
            <!--================ About History Area  =================-->
@endsection