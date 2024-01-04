@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white p-2">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="courses-details-content mt-50">
                    <h2 class="title">OFICINA GENERAL DE ADMINISTRACION</h2>
                    <p style="text-align:justify !important;">
                        La Gerencia de la Oficina General de Administración es el órgano encargado de dirigir, ejecutar, evaluar y controlar la administración del potencial humano, los recursos económicos, financieros, materiales, así como proporcionar los servicios que requieran las diferentes áreas de la Municipalidad Provincial de Ambo.
                    </p>

                    <img src="imagenes/administracion.jpg" width="845" height="533" alt="Course Details">

                    <h5 class="sub-title">Funciones</h5>

                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Asesorar a los órganos de Gobierno y de Dirección en los asuntos de carácter legal.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Emitir dictamen u opinión legal sobre los expedientes sometidos a su consideración.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Revisar todos los contratos y/o convenios en los que tome parte la Municipalidad.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Analizar las normas legales referidas a las municipalidades, publicadas en el Diario El Peruano y difundirlo permanentemente.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Analizar y visar los proyectos de Ordenanzas, Decretos de Alcaldía, Resoluciones de Alcaldía, Ordenanzas, Convenios, Acuerdos y contratos, según corresponda.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Absolver las consultas de carácter legal formuladas por las Unidades Orgánicas de la Municipalidad.</p>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection