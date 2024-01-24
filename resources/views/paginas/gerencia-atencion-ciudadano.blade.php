@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    <h2 class="title">GERENCIA OFICINA DE ATENCION AL CIUDADANO</h2>
                    <img src="imagenes/secretaria.jpg" class="img-fluid img-thumbnail" alt="Atencion al Ciudadano">
                    <p style="text-align:justify !important;">
                        La Gerencia de secretaria general es un órgano de apoyo, encargado de programar, dirigir, ejecutar y coordinar el apoyo administrativo al Concejo Municipal y a Alcaldía, así como dirigir, supervisar, y evaluar la gestión del tramite documentario y del sistema de archivos de la Municipalidad.
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="courses-features mt-30">
                    <div class="sidebar-title">
                        <h4 class="title mb-4">Servicios</h4>
                    </div>
                    <ul class="courses-features-items mb-4">
                      <h6><a href="#"> OFICINA DE TRAMITE DOCUMENTARIO Y ARCHIVO</a></h6>

                    </ul>
                    <ul class="courses-features-items mb-4">
                      <h6><a href="#"> OFICINA DE COMUNICACION E IMAGEN INSTITUCIONAL</a></h6>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection