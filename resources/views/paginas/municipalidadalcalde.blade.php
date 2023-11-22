@extends('layout')
@section('body-content')
    @include('componentes.banner')

<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mb-4">
                    <!-- Imagen del director -->
                    <img src="{{asset('storage/fotos/'.$alcalde->foto);}}" class="card-img-top" alt="Fotografía del Alcalde">

                    <div class="card-body">
                        <!-- Datos del director -->
                        <h5 class="card-title">{{$alcalde->titulo}}</h5>
                        <ul class="list-group list-group-flush">
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