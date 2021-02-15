@extends('layout')

@section('content')
            <!--================Breadcrumb Area =================-->
            <section class="breadcrumb_area">
                <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="" style="background-image: url({{ asset('images/banner1.jpg') }});"></div>
                <div class="container">
                    <div class="page-cover text-center">
                        <h2 class="page-cover-tittle">Contact Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <i class="fa fa-arrow-right" aria-hidden="true" style="color: rgb(255, 255, 255);"></i>
                            <li class="active">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </section>
            <!--================Breadcrumb Area =================-->

            <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">

                <!-- Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d919.7792301407275!2d85.49084329262922!3d27.62963539347189!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaeb9d164fc5a279d!2sHimalayan+Homestay+Nepal!5e1!3m2!1sen!2snp!4v1545817939571" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> <br><br><br><br>
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <h6>Banepa 14, Bhainshepati </h6>
                                <p>Kavre, State 3 <br> Nepal</p>
                            </div>
                            <div class="info_item">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h6><a href="#">(+977) 9851076081</a></h6>
                                <p>Everyday on business hours</p>
                            </div>
                            <div class="info_item">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h6><a href="#">info@himalayanhomestay.com.np</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="row contact_form" action="" method="" id="" style="float: right; width: 90%;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn theme_btn button_hover">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->


@endsection