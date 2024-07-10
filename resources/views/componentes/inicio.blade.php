@include('componentes.slider')
@foreach ($secciones as $item)
    @php
        echo $item->contenido;
    @endphp
@endforeach
<style>
.single-courses-2 {
    height: 400px; /* Establece la altura deseada */
}
</style>

<div class="specialty-area">
    <div class="container text-bg-light p-5 pt-0">
        <div class="row no-gutters wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="cl_logo_slider carousel_slider owl-carousel owl-theme" data-margin="15" data-loop="true" data-autoplay="true" data-dots="false"
            data-responsive='{"0":{"items": "1"}, "100":{"items": "2"}, "100":{"items": "3"}, "100":{"items": "4"}, "100": {"items": "5"}}'>
                <div class="item">
                    <a href="https://facilita.gob.pe/t/1258" target="_blank">
                        <div class="single-specialty mt-30">
                            <div class="specialty-box">
                                <div class="box-icon">
                                    <img src="edumate/assets/images/icon/icon-1.webp" width="70" height="70" alt="icon">
                                    <p>Biblioteca Virtual</p>
                                </div>
                            </div>
                        </div>                    
                    </a>                  
                </div>
                <div class="item">
                    <a href="" target="_blank">
                        <div class="single-specialty active mt-30">
                            <div class="specialty-box">
                                <div class="box-icon">
                                    <img src="edumate/assets/images/icon/icon-2.webp" width="70" height="70" alt="icon">
                                    <p>Examen Admision</p>
                                </div>
                            </div>
                        </div>
                    </a>              
                </div>
                <div class="item">
                    <a href="https://facilita.gob.pe/seguimiento" target="_blank">
                        <div class="single-specialty mt-30">
                            <div class="specialty-box">
                                <div class="box-icon">
                                    <img src="edumate/assets/images/icon/icon-3.webp" width="70" height="70" alt="icon">
                                    <p>Titulacion</p>
                                </div>
                            </div>
                        </div>
                    </a>       
                </div>                
                <div class="item">
                    <a href="https://facilita.gob.pe/seguimiento" target="_blank">
                        <div class="single-specialty mt-30">
                            <div class="specialty-box">
                                <div class="box-icon">
                                    <img src="edumate/assets/images/icon/icon-2-6.webp" width="70" height="70" alt="icon">
                                    <p>Titulo Minedu</p>
                                </div>
                            </div>
                        </div>
                    </a>         
                </div> 
            </div>                              
        </div>
    </div>
</div>

<div class="counter-area">
    <div class="container">
        <div class="counter-wrapper bg_cover" style="background-image: url(edumate/assets/images/counter-bg.webp);">
            <div class="row">
                <div class="col-sm-2 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.2s">
                        <span class="counter-count"><span class="count" data-count="3">0</span> +</span>
                        <p>Programas de Estudio</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <span class="counter-count"><span class="count" data-count="25">0</span> +</span>
                        <p>Docentes</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.6s">
                        <span class="counter-count"><span class="count" data-count="150">0</span> +</span>
                        <p>Estudiantes</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.8s">
                        <span class="counter-count"><span class="count" data-count="500">0</span> +</span>
                        <p>Egresados</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.8s">
                        <span class="counter-count"><span class="count" data-count="2024">0</span> +</span>
                        <p>Ingresantes</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.8s">
                        <span class="counter-count"><span class="count" data-count="60">0</span> +</span>
                        <p>Ingresantes 2024</p>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<section class="top-courses-area">
    <div class="container">
        <h1 class="text-center text-white font-weight-bold" style="font-weight: 900; background-color:#07294d"">PROGRAMAS DE ESTUDIO</h1><br>
        <div class="courses-wrapper fadeInUpBig">
            <div class="row">
                <div class="col-lg-4 col-sm-6 courses-col">
                    <div class="single-courses-2 mt-30" style="height:500px">
                        <div class="courses-image">
                            <a href="enfermeria-tecnica"><img src="imagenes/1.png" style="height:350px;" alt="courses"></a>
                        </div>
                        <div class="courses-content">
                            <h4 class="courses-title"><a href="enfermeria-tecnica">Enfermeria Tecnica</a></h4>
                            <div class="duration-rating">
                                <div class="duration-fee">
                                    <p class="duration">Enfermeria Tecnica</p>
                                    <p class="fee">Enfermeria Tecnica</p>
                                </div>
                            </div>
                            <div class="courses-link">
                                <a class="apply" href="#">Semestres : VI</a>
                                <a class="more" href="courses-details.html">Horas : 3240</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 courses-col">
                    <div class="single-courses-2 mt-30" style="height:500px">
                        <div class="courses-image">
                            <a href="produccion-agropecuaria"><img src="imagenes/2.png" style="height:350px;" alt="courses"></a>
                        </div>
                        <div class="courses-content">
                            <h4 class="courses-title"><a href="produccion-agropecuaria">Produccion Agropecuaria</a></h4>
                            <div class="duration-rating">
                                <div class="duration-fee">
                                    <p class="duration">Produccion Agropecuaria</p>
                                    <p class="fee">Produccion Agropecuaria</p>
                                </div>
                            </div>
                            <div class="courses-link">
                                <a class="apply" href="#">Semestres : VI</a>
                                <a class="more" href="courses-details.html">Horas : 3240</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 courses-col">
                    <div class="single-courses-2 mt-30" style="height:500px">
                        <div class="courses-image">
                            <a href="mecanica-automotriz"><img src="imagenes/3.png" style="height:350px;" alt="courses"></a>
                        </div>
                        <div class="courses-content">
                            <h4 class="courses-title"><a href="mecanica-automotriz">Mecanica Automotriz</a></h4>
                            <div class="duration-rating">
                                <div class="duration-fee">
                                    <p class="duration">Mecanica Automotriz</p>
                                    <p class="fee">Mecanica Automotriz</p>
                                </div>
                            </div>
                            <div class="courses-link">
                                <a class="apply" href="#">Semestres : VI</a>
                                <a class="more" href="courses-details.html">Horas : 3240</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="event-area">
    <div class="container">
        <h1 class="text-center text-white font-weight-bold" style="font-weight: 900;  background-color:#07294d"">COMUNICADOS</h1><br>
        <div class="tab-content event-tab-items wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="tab-pane fade show active" id="courses">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @php
                                $active = true;
                            @endphp
                            @foreach ($comunicados as $comunicado)
                            <div class="carousel-item {{$active == true ? 'active' : ''}}">
                                <div class="col-lg-4">
                                    <div class="single-event text-center mt-30">
                                        @if($comunicado->titulo != '')
                                            <h4 class="event-title"><a href="event-details.html">{{ $comunicado->titulo }}</a></h4>
                                        @endif
                                        <img src="{{asset('storage/comunicados/'.$comunicado->nombreImagen)}}" class="img-fluid" style="height: 450px" alt="">
                                        @if ($comunicado->link)
                                            <a href="{{$comunicado->link}}" class="more">Leer Mas <i class="far fa-chevron-right"></i></a>                                  
                                        @endif
                                    </div>
                                </div>    
                            </div>

                            @php
                                $active = false;
                            @endphp   
                            @endforeach
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="view-btn text-center">
                <a href="comunicados" class="view-more">Ver Mas <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>
<section class="blog-area">
    <div class="container">
        <h1 class="text-center text-white font-weight-bold" style="font-weight: 900;  background-color:#07294d">NOTICIAS</h1><br>
        <div class="blog-wrapper">
            <div class="row-wrapper blog-active">
                @foreach ($noticias as $registro)
                <div class="custom-col">
                    <div class="single-blog mt-30">
                        <div class="blog-image" style="height: 190px">
                            <a href="noticia?s={{$registro->slug}}">
                                <img src="{{ asset('storage/noticias/'.$registro->imagen->nombreimagen) }}" width="370" height="250" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <?php
                                // Supongamos que $registro es un objeto con una propiedad 'fecha_publicacion'
                                $fechaPublicacion = Carbon\Carbon::parse($registro->fecha_publicacion);
                                $fechaFormateada = $fechaPublicacion->isoFormat('dddd D [de] MMMM [de] YYYY', 'Do [de] MMMM [de] YYYY');
                            ?>
                            <ul class="meta">
                                <li><a href="#">{{$fechaFormateada}}</a></li>
                            </ul>
                            <h4 class="blog-title"><a href="noticia?s={{$registro->slug}}">{{$registro->titulo}}</a></h4>
                            <a href="noticia?s={{$registro->slug}}" class="more">Leer Mas <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="event-page">
    <div class="container">
        <h1 class="text-center text-white font-weight-bold" style="font-weight: 900;  background-color:#07294d">EVENTOS</h1><br>
        <div class="row">
            @foreach ($eventos as $item)
            <div class="col-lg-3 col-sm-6">
                <div class="single-event text-center mt-30">
                    <span class="time">{{ $item->subtitulo }}</span>
                    <span class="date">{{ $item->fecha }}</span>
                    <h4 class="event-title"><a href="evento?id={{$item->id}}">{{ $item->titulo }}</a></h4>
                    <p class="place">{{ $item->lugar }}</p>
                    <img src="{{ asset('storage/eventos/'.$item->imagen) }}" width="370" height="250" alt="imagen">
                    <a href="evento?id={{$item->id}}" class="more">leer mas <i class="far fa-chevron-right"></i></a>
                </div>
            </div>                
            @endforeach
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <h1 class="text-center text-white font-weight-bold" style="font-weight: 900;  background-color:#07294d">INFORMACION SOCIAL</h1><br>
        <div class="row">
            <div class="col">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jom1GilHIyo?si=sJxoB-Ek65W4Dp4p" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                           
            </div>
            <div class="col">
            
            </div>
            <div class="col">

            </div>
        </div>
    </div>
</section>
<section class="section_enlaces_externos">
    <div class="container">
        <h1 class="text-center text-white font-weight-bold" style="font-weight: 900; background-color:#07294d">ENLACES EXTERNOS</h1><br>
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp">
                <div class="cl_logo_slider carousel_slider owl-carousel owl-theme" data-margin="15" data-loop="true" data-autoplay="true" data-dots="false"
                data-responsive='{"0":{"items": "2"}, "100":{"items": "3"}, "100":{"items": "4"}, "100":{"items": "5"}, "100": {"items": "6"}}'>
                    @foreach ($enlaces as $item)
                    <div class="item">
                        <a href="{{$item->link}}"><img src="{{asset('storage/enlacesexternos/'.$item->nombreImagen);}}" width="170px" alt="{{$item->title}}"/></a>
                    </div>                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@if ($popup)
    <div class="modal fade" id="modalPopup" tabindex="-1" aria-labelledby="modalPopupLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalPopupLabel">Emergente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div id="imagenesPopupCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#imagenesPopupCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#imagenesPopupCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#imagenesPopupCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @php
                            $valor = true;
                        @endphp
                        @foreach ($popup->imagenes as $imagen)
                            <div class="carousel-item {{ $valor == true ? 'active' : '' }}" data-bs-interval="3000">
                                <img src="{{ asset('storage/popup/'.$imagen->nombreImagen) }}" class="d-block w-100" alt="...">
                            </div>
                            @php
                                $valor = false;
                            @endphp
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#imagenesPopupCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#imagenesPopupCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            </div>
        </div>
    </div>    
@endif



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.629145476826!2d-76.20727122406618!3d-10.129411109172679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a7ee3c3391333b%3A0x9999056b8e25c935!2sMunicipalidad%20Provincial%20de%20Ambo!5e0!3m2!1ses-419!2spe!4v1689300311725!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@include('componentes.footer')


@section('script')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v18.0" nonce="MNXupTpv"></script>
<script async src="https://www.tiktok.com/embed.js"></script>
@endsection