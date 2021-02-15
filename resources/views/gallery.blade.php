@extends('layout')

@section('content')
<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="" style="background-image: url({{ asset('images/banner1.jpg') }});"></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Gallery</h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <i class="fa fa-arrow-right" aria-hidden="true" style="color: rgb(255, 255, 255);"></i>
                <li class="active">Gallery</li>
            </ol>
        </div>
    </div>
</section>
<!--================End of Breadcrumb Area =================-->

        <!--================End of Gallery Area =================-->
        <section class="gallery_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Himalayan Homestay's Gallery</h2>
                    <p>Capture the memories</p>
                </div>
                <div class="row imageGallery1" id="gallery">
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery1.jpg') }}" alt="Image not available">
                            <div class="hover">
                            	<a class="light" href="{{ asset('images/gallery1.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery2.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery2.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery3.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery3.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                   <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery4.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery4.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery5.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery5.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery6.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery6.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery7.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery7.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery8.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery8.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery9.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery9.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery10.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery10.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery11.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery11.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery12.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery12.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery13.jpg') }}" alt="Image not available">
                            <div class="hover">
                                <a class="light" href="{{ asset('images/gallery13.jpg') }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End of Gallery Area =================-->
@endsection