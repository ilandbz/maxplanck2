@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">SUBGERENCIA DE ESTUDIOS Y PROYECTOS</h2>

                    <h5 class="sub-title">Funciones</h5>

                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Disponer la formulación de perfiles técnicos de conformidad a la normativa del Sistema Nacional de Inversión Pública SNIP y/o levantar las observaciones técnicas que el caso amerite.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Formular y proponer normas y procedimientos para la elaboración de estudios de pre inversión.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Realizar las coordinaciones y consultas necesarias para evitar la duplicidad de proyectos, como requisito previo a la remisión del estudio para la evaluación de la Unidad de Inversiones y Cooperación Técnica.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Levantar las observaciones o recomendaciones planteadas por la OPI o por la DGPM, según sea el caso.</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection