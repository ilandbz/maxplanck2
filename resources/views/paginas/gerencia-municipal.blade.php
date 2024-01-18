@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="courses-details-content mt-50">
                    <h2 class="title">GERENCIA MUNICIPAL</h2>
                    <img src="imagenes/gmunicipal.jpg" class="img-fluid thumbnail mt-4" alt="Gerencia Municipal">
                    <p style="text-align:justify !important;">
                        La Gerencia Municipal es el órgano de más alto nivel técnico administrativo, responsable de ejecutar y hacer cumplir las políticas del Concejo Municipal y de la Alcaldía, de la obtención de los resultados previstos y de la calidad de los servicios que se brindan.
                    </p>
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
        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection