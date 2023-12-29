@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">GERENCIA MUNICIPAL</h2>
                    <p style="text-align:justify !important;">
                        La Gerencia Municipal es el órgano de más alto nivel técnico administrativo, responsable de ejecutar y hacer cumplir las políticas del Concejo Municipal y de la Alcaldía, de la obtención de los resultados previstos y de la calidad de los servicios que se brindan.
                    </p>

                    <img src="imagenes/gmunicipal.jpg" class="img-fluid thumbnail mt-4" alt="Gerencia Municipal">

                    <h5 class="sub-title">Funciones</h5>

                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Evaluar y proponer al alcalde las normas y disposiciones necesarias para el desarrollo de los procesos de planeamiento, organización, control interno y evaluación de la gestión municipal.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Planificar, programar, organizar, dirigir, evaluar, supervisar y controlar la gestión y administración municipal para una adecuada prestación de los servicios, municipales con eficiencia y eficacia administrativa, económica financiera.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Informar sobre la gestión municipal de acuerdo al procedimiento previsto en la Ley Orgánica de Municipalidades.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Supervisar la ejecución presupuestal.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="courses-sidebar pt-20">
                    <div class="courses-features mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Servicios</h4>
                        </div>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE DESARROLLO HUMANO EDUCACION Y SALUD</h6>
                          <li><a href="">BIBLIOTECA</a></li>
                          <li><a href="">CENTRO CULTURAL</a></li>
                          <li><a href="">CASA MATERNA – ESTHER BLANCO DE MARTINEZ</a></li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE DEMUNA, CIAM Y OMAPED</h6>
                          <li><a href="">DEMUNA</a></li>
                          <li><a href="">CIAM</a></li>
                          <li><a href="">OMAPED</a></li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE PROGRAMAS SOCIALES E INCLUSION SOCIAL</h6>
                          <li><a href="">SISFOH</a></li>
                          <li><a href="">PROGRAMA PENSION 65</a></li>
                          <li><a href="">PROGRAMA JUNTOS</a></li>
                          <li><a href="">SUBGERENCIA DE ALIMENTACION Y NUTRICION</a></li>
                          <li><a href="">PROGRAMA VASO DE LECHE</a></li>
                          <li><a href="">COMPLEMENTACION ALIMENTACIÓN</a></li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE REGISTRO CIVIL</h6>
                        </ul>                        
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE RENTAS</h6>
                        </ul> 
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE SEGURIDAD CIUDADANA</h6>
                        </ul> 
                    </div>
                    <div class="courses-sidebar-banner mt-30">
                        <a href="#">
                            <img src="imagenes/logo.jpg" width="270" height="310" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection