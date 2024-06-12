@extends('layout')
@section('body-content')
    @include('componentes.banner')

<section class="about-area mb-20">

    <div class="container">

            <div class="details-content mt-50 text-center">
                <img src="{{'storage/eventos/'.$evento->imagen}}" width="771" height="439" alt="Evento">
                <ul class="meta">
                    <li><a href="#">{{ $evento->fecha }}</a></li>
                </ul>
                <h3 class="title">{{$evento->titulo}}</h3>
                <p>{!! $evento->contenido !!}</p>
            </div>

    </div>
</section>
<!--====== About Ends ======-->



@include('componentes.footer')
@endsection