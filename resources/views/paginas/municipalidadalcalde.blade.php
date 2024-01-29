@extends('layout')
@section('body-content')
    @include('componentes.banner')
    <section class="teacher-details mb-20">
        <div class="container">
            <div class="row teachers-row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-8 teachers-col">
                    <div class="single-teacher-details mt-50 text-center">
                        <div class="teacher-social">
                            <ul class="social">
                                <li><a href="{{$alcalde->link}}" target="_blank"><i class="fas fa-link"></i></a></li>
                            </ul>
                        </div>
                        <div class="teacher-image">
                                <a href="teacher-details.html">
                                <img src="{{asset('storage/fotos/'.$alcalde->foto);}}" width="373" height="503" alt="teacher">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 teachers-col">
                    <div class="teacher-details-content mt-45">
                        <h4 class="teacher-name">{{$alcalde->titulo}}</h4>
                        <span class="designation">{{$alcalde->cargo->nombre}}</span><br>
                        <span class="department">{{$alcalde->area->nombre}}</span>
                        <ul class="teacher-contact">
                            <li style="text-align: justify"><strong>FUNCIONES: </strong>{{$alcalde->funciones}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('componentes.footer')
@endsection

@section('script')

@endsection