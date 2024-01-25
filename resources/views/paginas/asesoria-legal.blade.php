@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="courses-details-content mt-50"> 
                    <div class="text-center">
                        <h2 class="title">GERENCIA DE ASESORIA LEGAL</h2>
                        <img src="imagenes/asesorialegal.jpg" class="img-fluid img-thumbnail" alt="GERENCIA DE ASESORIA LEGAL">

                    </div>                  

                    <p style="text-align:justify !important;">
                        La Gerencia de Asesoría Jurídica esta encargada de evaluar y asesorar sobre asuntos de carácter legal, que le sean solicitados por las diferentes dependencias de la Municipalidad, así como, garantizar la legalidad de las decisiones tomadas por la alcaldía y la Gerencia Municipal, además, realizar el análisis técnico jurídico de las normas legales de aplicación municipal, manteniendo la coherencia con el Sistema Jurídico Nacional.
                    </p>
                    <h5 class="sub-title">Funciones</h5>

                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Dirigir, ejecutar, coordinar y controlar las funciones de los sistemas de personal, abastecimientos, contabilidad, tesorería, y control patrimonial de la Municipalidad, acorde con las disposiciones técnico – normativas que para cada sistema se han emitido.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Conducir la programación de gastos acordes con las actividades, proyectos y prioridad de objetivos institucionales.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Administrar y centralizar todos los recursos financieros de la institución para su asignación racional, oportuna y de acuerdo a la programación de gastos, observando que el destino de los recursos, sea según las fuentes de financiamiento y las normas que lo regulan.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Evaluar y proponer al alcalde las normas y disposiciones necesarias para el desarrollo de los procesos de planeamiento, organización, control interno y evaluación de la gestión municipal.</p>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection