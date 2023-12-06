@extends('layout')
@section('body-content')
  @include('componentes.banner')
    <section class="about-area mb-4">
      <div class="container mb-4">
        <div class="courses-details-content mt-0">
            <h2 class="title">GERENCIA DE DESARROLLO SOCIAL</h2>
            <h5 class="text-center">SUBGERENCIA DE DESARROLLO HUMANO EDUCACION Y SALUD</h5>
            <div class="row">
              <div class="col-md-6">
                <h4>BIBLIOTECA</h4>
                <ul>
                  <li>CENTRO CULTURAL</li>
                  <li>CASA MATERNA – ESTHER BLANCO DE MARTINEZ</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h4>SUBGERENCIA DE DEMUNA, CIAM Y OMAPED</h4>
                <ul>
                  <li>DEMUNA</li>
                  <li>CIAM</li>
                  <li>OMAPED</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h4>SUBGERENCIA DE PROGRAMAS SOCIALES E INCLUSION SOCIAL</h4>
                <ul>
                  <li>SISFOH</li>
                  <li>PROGRAMA PENSION 65</li>
                  <li>PROGRAMA JUNTOS</li>
                  <li>SUBGERENCIA DE ALIMENTACION Y NUTRICION</li>
                  <li>PROGRAMA VASO DE LECHE</li>
                  <li>COMPLEMENTACION ALIMENTACIÓN</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h4>SUBGERENCIA DE REGISTRO CIVIL</h4>

              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h4>SUBGERENCIA DE RENTAS</h4>

              </div>
              <div class="col-md-6">
                <h4>SUBGERENCIA DE SEGURIDAD CIUDADANA</h4>

              </div>
            </div>            
        </div>
      </div>
    </section>
  @include('componentes.footer')
@endsection