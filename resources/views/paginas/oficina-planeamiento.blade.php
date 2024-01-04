@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">OFICINA DE PLANEAMIENTO Y PRESUPUESTO</h2>
                    <p style="text-align:justify !important;">
                        La Gerencia de Planeamiento y Presupuesto es el órgano de asesoría técnica en materia de planificación, presupuesto, inversión pública, racionalización y estadística; propone objetivos y prioridades de la acción municipal para el desarrollo sostenible local.
                    </p>

                    <img src="imagenes/presupuesto.jpg" width="845" height="533" alt="Course Details">
                    <h5 class="sub-title">Funciones</h5>

                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Coordinar, dirigir y supervisar la programación y formulación del Presupuesto Institucional; el control de los compromisos del gasto y la evaluación presupuestaria respectiva, conforme a la normatividad emitida por la Dirección Nacional de Presupuesto Público.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Coordinar, dirigir y supervisar la formulación, ejecución y evaluación del Plan de Desarrollo Concertado de la Provincia de Ambo.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Coordinar, dirigir y supervisar la formulación, ejecución y evaluación del Plan de desarrollo Institucional y los planes Operativos Institucionales.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Dar opinión técnica, previo análisis, sobre las propuestas de asignaciones modificaciones o transferencias del Presupuesto Municipal.</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection