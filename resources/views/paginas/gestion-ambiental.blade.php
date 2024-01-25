@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">GESTION AMBIENTAL Y RECURSOS NATURALES</h2>

                    <img src="imagenes/srs.jpg" class="img-fluid img-thumbnail mt-4" alt="GESTION AMBIENTAL Y RECURSOS NATURALES">

                    <p style="text-align:justify !important;">
                      LA GERENCIA DE GESTION AMBIENTAL Y RECURSOS NATURALES ES EL ORGANO DE LINEA, ENCARGADA DE PLANIFICAR, ORGANIZAR Y DIRIGIR LA PRESTACIÓN DE LOS SERVICIOS BÁSICOS DE LIMPIEZA PÚBLICA, MANTENIMIENTO, CONSERVACIÓN Y PROMOCIÓN DEL CRECIMIENTO DE SUS AREAS VERDES, EL MANEJO DE LAS ACTIVIDADES DE MEJORAMIENTO Y PROTECCIÓN DEL MEDIO AMBIENTE, BUSCANDO SU IDENTIFICACIÓN, AMBIENTALISTA.
                    </p>
                    <h5 class="sub-title">Funciones</h5>
                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Desarrollar actividades de gestión ambiental de acuerdo con los lineamientos de políticas, objetivos y metas, considerando a las entidades públicas y privadas relacionadas, y a la sociedad civil de acuerdo a la normativa vigente.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Planificar, organizar, dirigir y controlar el servicio de limpieza pública (recolección, transporte y disposición final de residuos sólidos) y el mantenimiento de áreas verdes de uso público, promoviendo su mejoramiento e incremento.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Conducir el proceso de determinación de necesidades de bienes y servicios necesarios para la correcta realización de las labores de limpieza pública y mantenimiento de áreas verdes, optimizando el uso de los recursos públicos, para que en coordinación con la unidad de rentas se establezca la estructura de costos de los respectivos arbitrios.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Cumplir con el plan de servicios de limpieza pública y mantenimiento de parques y jardines.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Ejecutar programas sobre la responsabilidad y tenencia de animales domésticos, generando una norma específica para el registro, control y desplazamiento en calles y parques de la ciudad, en coordinación con la unidad de desarrollo humano, educación y salud.</p>
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
