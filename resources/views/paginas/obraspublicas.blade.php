@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">SUBGERENCIA DE OBRAS PÚBLICAS</h2>

                    <h5 class="sub-title">Funciones</h5>

                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Dirigir y conducir el proceso técnico administrativo para la ejecución y supervisión de obras por la modalidad de administración directa y contratada, hasta el proceso de liquidación, en concordancia con los dispositivos legales vigentes.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Informar oportunamente al órgano que declaró la viabilidad del PIP toda modificación que ocurra durante la fase de inversión.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Programar la ejecución de los proyectos de inversión.</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection