@extends('layout')
@section('body-content')
    @include('componentes.banner')

<!--====== Page Banner Ends ======-->

<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-content mt-40">
                    <h2 class="about-title">Quienes <span>Somos</span> </h2>
                    <span class="line"></span>
                    <p>{{$organizacion->quienes_somos}}</p>
                    <a href="#" class="main-btn">Explore</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <div class="single-image image-1">
                        <img src="edumate/assets/images/about/about-1.jpg" width="290" height="290" alt="about">
                    </div>
                    <div class="single-image image-2">
                        <img src="edumate/assets/images/about/about-2.jpg" width="225" height="225" alt="about">
                    </div>
                    <div class="single-image image-3">
                        <img src="edumate/assets/images/about/about-3.jpg" width="190" height="190" alt="about">
                    </div>
                    <div class="single-image image-4">
                        <img src="edumate/assets/images/about/about-4.jpg" width="140" height="140" alt="about">
                    </div>

                    <div class="about-icon icon-1">
                        <img src="edumate/assets/images/about/icon/icon-1.webp" width="46" height="46" alt="icon">
                    </div>
                    <div class="about-icon icon-2">
                        <img src="edumate/assets/images/about/icon/icon-2.webp" width="46" height="46" alt="icon">
                    </div>
                    <div class="about-icon icon-3">
                        <img src="edumate/assets/images/about/icon/icon-3.webp" width="46" height="46" alt="icon">
                    </div>
                    <div class="about-icon icon-4">
                        <img src="edumate/assets/images/about/icon/icon-4.webp" width="46" height="46" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== About Ends ======-->



@include('componentes.footer')
@endsection