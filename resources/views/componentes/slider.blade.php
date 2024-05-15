
<section class="slider-area slider-active">
    @foreach ($sliders as $slider)
        <div class="single-slider" style="background-image: url({{asset('storage/slider/'.$slider->nombreImagen);}}); 
        background-size: contain; background-position: center center; background-repeat: no-repeat;">
            <div class="container pt-4">
                <div class="slider-content pt-4">
                    <h2 class="title text-info text-center" style="font-size: 40px" data-animation="fadeInLeft" data-delay="0.2s">{{$slider->titulo}}</h2>
                    <h2 class="title text-info text-center" style="color: white;" data-animation="fadeInLeft" data-delay="0.2s">{{$slider->subtitulo}}</h2>
                    <ul class="slider-btn">
                        @if($slider->nombrebutton1)
                        <li><a data-animation="fadeInUp" data-delay="0.6s" class="main-btn main-btn-2" href="our-courses-left-sidebar.html">{{$slider->nombrebutton1}}</a></li>
                        @endif
                        @if($slider->nombrebutton2)
                        <li><a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="#">{{$slider->nombrebutton2}}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>    
    @endforeach
</section>    
