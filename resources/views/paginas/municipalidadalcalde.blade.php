@extends('layout')
@section('body-content')
    @include('componentes.banner')

<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                    <div class="single-teacher mb-20 text-center">
                        <div class="teacher-social">
                            <ul class="social">
                                <li><a href="{{$alcalde->link}}"><i class="fas fa-link"></i></a></li>
                            </ul>
                        </div>
                        <div class="teacher-image">
                            <a href="teacher-details.html">
                                <img src="{{asset('storage/fotos/'.$alcalde->foto);}}" width="266" height="359" alt="teacher">
                            </a>
                        </div>
                        <div class="teacher-content">
                            <h4 class="name"><a href="teacher-details.html">{{$alcalde->titulo}}</a></h4>
                            <span class="designation">{{$alcalde->cargo->nombre}}</span>
                            <ul >
                                <li class="list-group-item"><strong>DNI:</strong> {{$alcalde->dni}}</li>
                                <li class="list-group-item"><strong>Celular:</strong> {{$alcalde->celular}}</li>
                                <li class="list-group-item"><strong>Email:</strong> {{$alcalde->email}}</li>
                                <li class="list-group-item"><strong>Cargo:</strong> {{$alcalde->cargo->nombre}}</li>
                            </ul>                            
                        </div>
                    </div>


            </div>
        </div>
    </div>
</section>
<!--====== About Ends ======-->



@include('componentes.footer')
@endsection