@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">GERENCIA DE DESARROLLO SOCIAL</h2>
                    <img src="imagenes/sociales.jpg" class="img-fluid img-thumbnail" alt="GERENCIA DE DESARROLLO SOCIAL">
                    <p style="text-align:justify !important;">
                      LA GERENCIA DE DESARROLLO SOCIAL ES EL ORGANO DE LINEA, RESPONSABLE DE DIRIGIR Y EJECUTAR LAS POLITICAS EN EL AREA DEL DESARROLLO HUMANO Y LA PARTICIPACIÓN CIUDADANA, TENIENDO COMO EJE PRINCIPAL DE SU TRABAJO, LA PROMOCIÓN DE CAPACIDADES DEL CAPITAL HUMANO, NECESARIAS PARA EL DESARROLLO LOCAL, ASI COMO LAS ACTIVIDADES DESTINADOS A LA PROTECCIÓN Y DEFENSA DE LA INTEGRIDAD FÍSICA DE LA CIUDADANÍA.
                    </p>
                    <h5 class="sub-title">Funciones</h5>
                    <ul class="courses-details-list">
                      <li>
                        <i class="far fa-check-circle"></i>
                        <p>Coordinar con instituciones públicas y privadas para la implementación de planes, programas y proyectos sociales, con énfasis en la lucha contra la pobreza, desnutrición infantil, violencia familiar y sexual.</p>
                    </li>
                    <li>
                        <i class="far fa-check-circle"></i>
                        <p>Supervisar el cumplimiento de las actividades destinadas a la promoción del desarrollo humano sostenible, fomentando la recreación, el deporte, la salud y el bienestar social dentro del distrito de Ambo.</p>
                    </li>
                    <li>
                        <i class="far fa-check-circle"></i>
                        <p>Formular e implementar el Plan de Desarrollo Social y los programas de bienestar en beneficio de niños, adolescentes, jóvenes, adultos, adultos mayores y comunidad en general, articulándose con el Plan de Desarrollo Social Concertado y el Plan Estratégico Institucional.</p>
                    </li>
                    <li>
                        <i class="far fa-check-circle"></i>
                        <p>Promover en la población su participación activa en las campañas de salud física y mental.</p>
                    </li>
                    <li>
                        <i class="far fa-check-circle"></i>
                        <p>Liderar los comités, equipos multisectoriales para la disminución de la mortalidad materna y desnutrición infantil.</p>
                    </li>
                    <li>
                        <i class="far fa-check-circle"></i>
                        <p>Planear, dirigir, controlar, supervisar y evaluar las actividades del Sistema de Focalización de Hogares (SISFOH).</p>
                    </li>
                    <li>
                        <i class="far fa-check-circle"></i>
                        <p>Programar, dirigir y controlar la administración de la Casa Materna y centros de vigilancia de la madre y del niño a cargo de la municipalidad.</p>
                    </li>
                    <li>
                        <i class="far fa-check-circle"></i>
                        <p>Organizar, conducir, controlar y actualizar los servicios que brinda la Biblioteca Municipal y la Academia Municipal.</p>
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
                          <li>BIBLIOTECA</li>
                          <li>CENTRO CULTURAL</li>
                          <li>CASA MATERNA – ESTHER BLANCO DE MARTINEZ</li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE DEMUNA, CIAM Y OMAPED</h6>
                          <li>DEMUNA</li>
                          <li>CIAM</li>
                          <li>OMAPED</li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE PROGRAMAS SOCIALES E INCLUSION SOCIAL</h6>
                          <li>SISFOH</li>
                          <li>PROGRAMA PENSION 65</li>
                          <li>PROGRAMA JUNTOS</li>
                          <li>SUBGERENCIA DE ALIMENTACION Y NUTRICION</li>
                          <li>PROGRAMA VASO DE LECHE</li>
                          <li>COMPLEMENTACION ALIMENTACIÓN</li>
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

                </div>
            </div>
        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection