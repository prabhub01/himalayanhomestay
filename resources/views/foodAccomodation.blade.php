@extends('layout')

@section('content') 
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="" style="background-image: url({{ asset('images/banner1.jpg') }});"></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Accomodation</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <i class="fa fa-arrow-right" aria-hidden="true" style="color: rgb(255, 255, 255);"></i>
                    <li class="active">Accomodation</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================End of Breadcrumb Area =================-->

<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color" style="margin-bottom: 0px;">Special Accomodation</h2>
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

<!--================Booking Tabel Area =================-->
<div id="bookthisroom">
    <section class="hotel_booking_area">
        <div class="container">
           <form action="booking.php" method="POST">
            <div class="row hotel_booking_table">
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
</section>
</div>
<!--================End of Booking Tabel Area  =================-->

<!--================ Food Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Food</h2>
            <p>Taste the real taste that you never had before</p>
        </div>
        <div class="row accomodation_two">

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('images/fruits.jpg') }}" alt="" height="260px" width="270px">
                    </div>
                    <a href="#"><h4 class="sec_h4">Fruits</h4></a>
                    <h5><small>Breakfast</small></h5>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('images/menu_2.jpg') }}" alt="" height="260px" width="270px">
                    </div>
                    <a href="#"><h4 class="sec_h4">Toast, Egg & Potato</h4></a>
                    <h5><small>Breakfast</small></h5>
                </div>
            </div>

           <!--  <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/menu_3.jpg" alt="" height="260px" width="270px">
                    </div>
                    <a href="#"><h4 class="sec_h4">Pakoda & Tea</h4></a>
                    <h5><small>Breakfast</small></h5>
                </div>
            </div> -->

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('images/menu_4.jpg') }}" alt="" height="260px" width="270px">
                    </div>
                    <a href="#"><h4 class="sec_h4">Cell-Roti & Tea</h4></a>
                    <h5><small>Breakfast</small></h5>
                </div>
            </div>
<!-- 
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/menu_5.jpg" alt="" height="260px" width="270px">
                    </div>
                    <a href="#"><h4 class="sec_h4">Nepali Thali</h4></a>
                    <h5><small>Lunch/Dinner</small></h5>
                </div>
            </div> -->

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('images/daalbhat.jpg') }}" alt="" height="260px" width="270px">
                    </div>
                    <a href="#"><h4 class="sec_h4">Daal Bhat</h4></a>
                    <h5><small>Lunch/Dinner</small></h5>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('images/menu_7.jpg') }}" alt="" height="260px" width="270px">
                    </div>
                    <a href="#"><h4 class="sec_h4">Roti Tarkari</h4></a>
                    <h5><small>Lunch/Dinner</small></h5>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('images/menu_8.jpg') }}" alt="" height="260px" width="270px">
                    </div>
                    <a href="#"><h4 class="sec_h4">Dhido Gundruk</h4></a>
                    <h5><small>Dinner</small></h5>
                </div>
            </div>

        </div>
    </div>
</section>
<!--================ End of Food Area  =================-->
@endsection