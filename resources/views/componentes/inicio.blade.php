@include('componentes.slider')
@foreach ($secciones as $item)
    @php
        echo $item->contenido;
    @endphp
@endforeach
<!--====== Noticias ======-->
<section class="event-area">
    <div class="container">
        <div class="event-title-tab-menu">
            <div class="event-title mt-40">
                <h2 class="title">Comunicados</h2>
            </div>
            <div class="event-tab-menu mt-40">
            </div>
        </div>
        <div class="tab-content event-tab-items wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="tab-pane fade show active" id="courses">
                <div class="row">
                    @foreach ($comunicados as $comunicado)
                        <div class="col-lg-4">
                            <div class="single-event text-center mt-30">
                                <h4 class="event-title"><a href="event-details.html">{{$comunicado->titulo}}</a></h4>
                                <img src="{{asset('storage/comunicados/'.$comunicado->nombreImagen)}}" class="img-fluid" alt="">
                                @if ($comunicado->link)
                                    <a href="{{$comunicado->link}}" class="more">Leer Mas <i class="far fa-chevron-right"></i></a>                                  
                                @endif
                            </div>
                        </div>                        
                    @endforeach
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
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-9">
                <div class="section-title-2 text-center">
                    <h2 class="title">Noticias</h2>
                    <span class="line"></span>
                    <p>Noticias Relevantes</p>
                    <a href="noticias" class="view-more">Ver Mas <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="blog-wrapper">
            <div class="row-wrapper blog-active">
                @foreach ($noticias as $registro)
                <div class="custom-col">
                    <div class="single-blog mt-30">
                        <div class="blog-image" style="height: 190px">
                            <a href="noticia?s={{$registro->slug}}">
                                <img src="{{ asset('storage/noticias/' . $registro->imagen->nombreimagen) }}" width="370" height="250" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li><a href="noticia?s={{$registro->slug}}">{{$registro->subtitulo}}</a></li>
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
<!--====== Blog Ends ======-->    






<section class="section_enlaces_externos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-9">
                <div class="section-title-2 text-center">
                    <h3 class="title">ENLACES EXTERNOS</h3>
                    <br>
                </div>
            </div>
        </div>
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
    <!-- Modal -->
    <div class="modal fade" id="modalPopup" tabindex="-1" aria-labelledby="modalPopupLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-info">
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
