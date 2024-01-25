@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">GESTION AMBIENTAL</h2>

                    <img src="imagenes/srs.jpg" class="img-fluid img-thumbnail mt-4" alt="GESTION AMBIENTAL">

                    <p style="text-align:justify !important;">
                      LA GERENCIA DE GESTION AMBIENTAL Y RECURSOS NATURALES ES EL ORGANO DE LINEA, ENCARGADA DE PLANIFICAR, ORGANIZAR Y DIRIGIR LA PRESTACIÓN DE LOS SERVICIOS BÁSICOS DE LIMPIEZA PÚBLICA, MANTENIMIENTO, CONSERVACIÓN Y PROMOCIÓN DEL CRECIMIENTO DE SUS AREAS VERDES, EL MANEJO DE LAS ACTIVIDADES DE MEJORAMIENTO Y PROTECCIÓN DEL MEDIO AMBIENTE, BUSCANDO SU IDENTIFICACIÓN, AMBIENTALISTA.
                    </p>
                    <h5 class="sub-title">Funciones</h5>
                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Formular, implementar y ejecutar planes establecidos en el marco del Sistema Nacional de Gestión del Riesgo de Desastres, en concordancia con el Plan Nacional de Gestión de Riesgos de Desastres.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Dirigir y controlar la prestación de servicios técnicos de inspección de seguridad en materia de defensa civil, de acuerdo a lo establecido en el Reglamento de Inspecciones Técnicas de Seguridad en Defensa Civil.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Dirigir las inspecciones técnicas de seguridad, ex – post y ex – ante que requiera la Unidad de Promoción Empresarial y turismo, dentro del procedimiento de emisión de licencias de funcionamiento.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Programar, organizar y controlar las actividades de capacitación de los Brigadistas Voluntarios de Defensa Civil y/o Brigadistas de Seguridad y Gestión de riesgos de Desastres.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Elaborar programas de sensibilización a la población, creando una cultura de prevención y de seguridad, con la finalidad de planificar, principalmente acciones de prevención e incrementar la capacidad de respuesta efectiva en caso de desastres.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Representar a la Municipalidad y coordinar, con las instancias regionales y nacionales del SINAGERD, las acciones que tengan impacto en la Provincia.</p>
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
                          <h6>RECOLECCIÓN DE RESIDUOS SOLIDOS</h6>
                          <li><a href="">Horarios y rutas de recolección</a></li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>PROGRAMA RECICLA AMBO</h6>
                          <li><a href="">Segregación en la fuente: recolección de residuos orgánicos e inorgánicos</a></li>
                          <li><a href="">Reciclador “AMBINITA”</a></li>
                          <li><a href="">Valorización de residuos orgánicos – Compost </a></li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>FISCALIZACIÓN AMBIENTAL</h6>
                          <li><a href="">Denuncias ambientales</a></li>
                          <li><a href="">Monitoreos de ruido </a></li>
                          <li><a href="">Fiscalizaciones nocturnas</a></li>
                          <li><a href="">Fiscalización de vecinos cochinos </a></li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>PROGRAMA EDUCCA</h6>
                          <li><a href="">ECO TRUEQUE</a></li>
                          <li><a href="">ECO CINE</a></li>                          
                        </ul>                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection
