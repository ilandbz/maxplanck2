@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">GERENCIA OFICINA DE ATENCION AL CIUDADANO</h2>
                    <p style="text-align:justify !important;">
                        La Gerencia de secretaria general es un órgano de apoyo, encargado de programar, dirigir, ejecutar y coordinar el apoyo administrativo al Concejo Municipal y a Alcaldía, así como dirigir, supervisar, y evaluar la gestión del tramite documentario y del sistema de archivos de la Municipalidad.
                    </p>

                    <img src="imagenes/secretaria.jpg" class="img-fluid thumbnail" alt="Atencion al Ciudadano">

                </div>


            </div>

        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection