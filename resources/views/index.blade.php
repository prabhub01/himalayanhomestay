@extends('layout')

@section('content')    
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
        	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="background-image: url({{ asset('images/banner_bg1.jpg') }});"></div>
         <div class="container">
            <div class="banner_content text-center">
               <h6>A Home Away From Your Home</h6>
               <h2>Himalayan Homestay Nepal</h2>
           </div>
       </div>
   </div>
   <div id="booking">
    <div class="hotel_booking_area position">
        <div class="container">
            <form action="booking.php" method="POST">
            <div class="hotel_booking_table">
                <div class="col-md-3">
                    <h2>Book<br> Your Room</h2>
                </div>
                <div class="col-md-9">
                    <div class="boking_table">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="form-group">
                                        <div class='input-group date'>
                                        <input type='date' name="checkin" class="form-control" placeholder="Check in"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group'>
                                        <input type='date' name="checkout" class="form-control" placeholder="Check out"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide" name="adult">
                                            <option value="None">Adult</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                <div class="input-group">
                                    <select class="wide" name="child">
                                        <option value="None">Child</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book_tabel_item">
                                <div class="input-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                                </div>
                                <!-- <a class="book_now_btn button_hover" href="#">Book Now</a> -->
                                <input type="submit" name="submit" value="Book Now" class="book_now_btn button_hover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
</div>
</section>
<!--================ End of Banner Area =================-->

<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color" style="margin-bottom: 0px;">Himalayan Homestay Nepal</h2>
            <img src={{ asset('images/bg-yellow.png') }} alt="Image Not Found" width="20%">
            <p style="font-size: 18px;">Himalayan Homestay Nepal is 20 km south east from Kathmandu, tribhuvan international airport. This is one of the best place for staying in a peaceful environment and for different activities away from polluted and crowdy kathmandu valley. The homestay is in the heart of the city, So you are few km away from both breathtaking hills and many of the historic and cultural places.</p> <br>

            <p style="font-size: 18px;">Himalayan Homestay Nepal spreads over 1800.00 sq ft of serenity <!-- surrounded by the 36642.14 sq ft of compound --> in a lap of natural beauty. Being so close to kathmandu valley, you can experience the typical village & farm life with an oppertunity to be its part. It surrounds you with the green forest and beautiful scenes of hills and mountain with comfort and convenience of fine accommodation.  </p>
        </div>

        <div class="row mb_30">    
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('images/room1.jpg') }}" alt="">
                        <a href="accomodation.php#bookthisroom" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <h4 class="sec_h4">Langtang</h4>
                     <h5><i class="fa fa-user" aria-hidden="true"></i> $20<small>/night</small> <small>(including meals)</small></h5>
                     <h5><i class="fa fa-users" aria-hidden="true"></i> $30<small>/night</small> <small>(including meals)</small></h5>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('images/room2.jpg') }}" alt="">
                        <a href="accomodation.php#bookthisroom" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <h4 class="sec_h4">Chandeshwori</h4>
                    <h5><i class="fa fa-user" aria-hidden="true"></i> $20<small>/night</small> <small>(including meals)</small></h5>
                    <h5><i class="fa fa-users" aria-hidden="true"></i> $30<small>/night</small> <small>(including meals)</small></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End of Accomodation Area  =================-->

<!--================ Facilities Area  =================-->
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="" style="background-image: url({{ asset('images/facilites_bg.jpg') }});">  
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Facilities</h2>
            <!-- <p>Who are in extremely love with eco friendly system.</p> -->
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="fa fa-spoon" aria-hidden="true"></i>Kitchen</h4>
                    <!-- <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="fa fa-male"></i>Yoga & Meditation</h4>
                    <!-- <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="fa fa-wifi"></i>Wifi</h4>
                    <!-- <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="fa fa-car"></i>City Tour</h4>
                    <!-- <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="fa fa-bath"></i>Bath/Shower</h4>
                    <!-- <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="fa fa-tree"></i>Nice Environment</h4>
                    <!-- <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End of Facilities Area  =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <a href="about.php"> <h2 class="title title_color">About<br>My Family</h2> </a>
                   <!--  <p style="text-align: justify;">Hi I am Laxman Basnet, permanent resident from Banepa. I have a lovley family including my wife Chandika, daughter Sasmini, and son Sasman. My family has been living on this land since the mid 1800's and are active members of our community. Walking up to our residence you will be greeted by our extended family of grandparents, aunts, uncles,and cousins all whom live in our village and help manage our four acres of farming land. We grow all of our food organically and produce potato, rice, wheat and vegetables.</p> -->
                    <!-- <a href="#" class="button_hover theme_btn_two">Read More</a> -->
                    <div class="button-group-area mt-40">
                       <a href="about.php" class="genric-btn info circle arrow">Read More &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                   </div>
               </div>
           </div>
           <div class="col-md-6">
            <img class="img-fluid" src="{{ asset('images/family.jpg') }}" alt="image not found">
        </div>
    </div>
</div>
</section>
<!--================ End of About History Area  =================-->

<!--================ Testimonial Area  =================-->
<section class="testimonial_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Testimonial from our Happy Clients</h2>
            <!-- <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p> -->
        </div>
        <div class="testimonial_slider owl-carousel">
            <div class="media testimonial_item">
                <img class="rounded-circle" src="image/aki.jpg" alt="image not found">
                <div class="media-body">
                    <p style="text-align: justify;">Highly recommended to this beautiful and warm homestay. You can feel real local life in Nepal. Meals which the owner's family makes beautifully delicious everytime. There is many places to see around. The homestay located about an hour away from Airport but you can ask to pick up. If you stay in here you can be a real Nepali! Namaste  </p>
                    <h4 class="sec_h4">Aki Komatsuzaki</h4>
                    <small>December 7, 2017</small>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <!-- <a href="#"><i class="fa fa-star-half-o"></i></a> -->
                    </div>
                </div>
            </div>    
            <div class="media testimonial_item">
                <img class="rounded-circle" src="image/user.png" alt="">
                <div class="media-body">
                    <p style="text-align: justify;">We did not know Laxman and his family before arriving, but after our short homestay we have made friends for a lifetime! This family in Banepa truly introduce you to the real Nepal. You can also visit the nearby ashram for yoga and meditation or join some of Laxmans Taekwon-do classes! I highly recommend a stay if you want to be a visitor in this wonderful country and not only a tourist.</p>
                    <h4 class="sec_h4">Viktoria Olausson</h4>
                    <small>October 31, 2017</small>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="image/thomas.jpg" alt="">
                <div class="media-body">
                    <p>I truly can recommend staying at Mr. Laxman's homestay. East of Kathmandu you meet a nice family and friends of Laxman. On the back of a motorbike you will go to the places you want to visit.And on top of all you will feel the power of delicious dal bhaat by the family's great cooks. </p>
                    <h4 class="sec_h4">Thomas Wahlmüller</h4>
                    <small>December 18, 2017</small>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>    
            <div class="media testimonial_item">
                <img class="rounded-circle" src="image/rishi.jpg" alt="">
                <div class="media-body">
                    <p style="text-align: justify;">I have been here for two weeks and is staying on for at least two more. Breathtaking views, wonderful food, clean environment,and most importantly a family away from home </p>
                    <h4 class="sec_h4">Rishi Parasram</h4>
                    <small>October 27, 2018</small>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End of Testimonial Area  =================-->

@endsection