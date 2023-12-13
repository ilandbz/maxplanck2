@extends('layout')
@section('body-content')
    @include('componentes.banner')

    <section class="contact-area pb-4">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Dirección</h5>
                            <p>{{$organizacion->direccion}}</p>
                        </div>
                    </div>
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Teléfono</h5>
                            <p><a href="tel:+51 {{$organizacion->telefono}}">+51 {{$organizacion->telefono}} </a></p>
                        </div>
                    </div>
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Email</h5>
                            <p><a href="mailto://{{$organizacion->email}}">{{$organizacion->email}}</a></p>
                            <p><a href="mailto://tramitedocumentariomuniambo@gmail.com">tramitedocumentariomuniambo@gmail.com</a></p>
                        </div>
                    </div>                        
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-globe-africa"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Web</h5>
                            <p><a href="{{$organizacion->url_web}}">{{$organizacion->url_web}}</a></p>
                        </div>
                    </div>
                    @foreach ($redessociales as $item)
                        <div class="single-contact-info mt-30">
                            <div class="info-icon">
                                <i class="{{$item->icono}}"></i>
                            </div>
                            <div class="info-content">
                                <h5 class="title">{{$item->titulo}}</h5>
                                <p><a href="{{$item->url}}">{{$item->url}}</a></p>
                            </div>
                        </div>        
                    @endforeach                                              
                </div>

                <div class="col-md-6">
                    <div class="card text-center mx-auto">
                        <img src="imagenes/toma_dron.jpg" class="card-img-top" alt="Municipalidad Provincial de Ambo">
                        <div class="card-body">
                            <h4 class="text-justify">MUNICIPALIDAD PROVINCIAL DE AMBO</h4>
                            <p class="card-text text-justify">"Gestión 2023 - 2026"</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-title text-center">
                            <h3 class="title">Sistema de Gestion Documentario</h3>
                        </div>
                        <div class="text-center">
                            <a href="" class=""><img src="imagenes/sgd.jpg" width="200px" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                    </div>
                </div>
            </div>
        </div>
    </section>



@include('componentes.footer')
@endsection