@extends('layout')
@section('body-content')
    @include('componentes.banner')
    <!--====== Blog Details Start ======-->
    <section class="blog-details-page mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <div class="details-content mt-50">
                            <img src="{{'storage/noticias/'.$noticia->imagen->nombreimagen}}" width="771" height="439" alt="Blog Detaisl">
                            <ul class="meta">
                                <li><a href="#">{{ $noticia->created_at->locale('es')->isoFormat('D [de] MMMM [de] YYYY') }}</a></li>
                            </ul>
                            <h3 class="title">{{$noticia->titulo}}</h3>
                            <p>{{$noticia->contenido}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar right-sidebar pt-20">
                        <div class="blog-sidebar-category mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">Imagenes</h4>
                            </div>
                            <ul class="category-items">
                                @foreach ($noticia->imagenes as $item)
                                @if ($item->nombreimagen!=$noticia->imagen->nombreimagen)
                                <li>
                                    <img src="{{ asset('storage/noticias/'.$item->nombreimagen ) }}" class="img-fluid" alt="">
                                </li>                                           
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Blog Details Ends ======-->
    @include('componentes.footer')
@endsection