@include('componentes.slider')
@foreach ($secciones as $item)
    @php
        echo $item->contenido;
    @endphp
@endforeach
<!--====== Noticias ======-->
<section class="blog-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-9">
                <div class="section-title-2 text-center">
                    <h2 class="title">Noticias</h2>
                    <span class="line"></span>
                    <p>Noticias Relevantes</p>
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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.629145476826!2d-76.20727122406618!3d-10.129411109172679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a7ee3c3391333b%3A0x9999056b8e25c935!2sMunicipalidad%20Provincial%20de%20Ambo!5e0!3m2!1ses-419!2spe!4v1689300311725!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@include('componentes.footer')