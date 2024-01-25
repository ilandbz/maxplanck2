@extends('layout')
@section('body-content')
  @include('componentes.banner')

<section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    <div class="text-center">
                        <h2 class="title">GERENCIA TERRITORIAL E INFRAESTRUCTURA</h2>
                        <img src="imagenes/territorial.jpg" class="img-fluid img-thumbnail" alt="GERENCIA TERRITORIAL E INFRAESTRUCTURA">                        
                    </div>
                    <p style="text-align:justify !important;">
                        La Gerencia de Desarrollo Territorial e Infraestructura, es el órgano de línea encargado de planificar, ejecutar y supervisar las acciones referidas a los proyectos y obras públicas, el planeamiento de los espacios urbanos y rurales, el ornato, catastro y control urbano y de edificaciones.
                    </p>
                    <h5 class="sub-title">Funciones</h5>
                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Planificar, dirigir, ejecutar y controlar la realización de Proyectos de inversión, Estudios y Ejecución de obras públicas, así como normar, regular y controlar las Edificaciones Privadas, Infraestructura Vial, Adjudicación, Titulación y Saneamiento Físico Legal de Terrenos en Asentamientos Humanos, en el ámbito jurisdiccional.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Ejecutar las obras civiles en concordancia a las especificaciones técnicas contenidas en el Expediente Técnico y en Presupuesto Institucional.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Diseñar políticas y planes para el acondicionamiento territorial de la Provincia de Ambo de acuerdo a la zonificación vigente y a los objetivos estratégicos de la provincia. Incluye la formulación del Plan de Desarrollo urbano, así como el Plan director de la ciudad de Ambo.</p>
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
                          <h6><a href="/obras-publicas"> SUBGERENCIA DE OBRAS PUBLICAS</a></h6>
                        </ul>
                        <ul class="courses-features-items">
                          <h6><a href="/estudios-proyectos"> SUBGERENCIA DE ESTUDIOS Y PROYECTOS</a></h6>

                        </ul>
                        <ul class="courses-features-items">
                          <h6><a href="/acondicionamiento-territorial"> SUBGERENCIA DE ACONDICIONAMIENTO TERRITORIAL Y URBANISMO</a></h6>

                        </ul>
                        <ul class="courses-features-items">
                          <h6><a href="/riesgo-desastre"> SUBGERENCIA DE GESTION DE RIESGO Y DESASTRE</a></h6>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection