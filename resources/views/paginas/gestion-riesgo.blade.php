@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">SUBGERENCIA DE GESTION DE RIESGO Y DESASTRE</h2>
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

        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection