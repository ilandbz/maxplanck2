@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">SUBGERENCIA DE ACONDICIONAMIENTO TERRITORIAL Y URBANISMO</h2>

                    <h5 class="sub-title">Funciones</h5>

                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Formular el plan de Acondicionamiento Territorial a nivel distrital, que identifique las áreas urbanas y de expansión urbana, así como áreas de protección o de seguridad por riesgos naturales, áreas naturales, áreas agrícolas y áreas de conservación ambiental.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Formular el Plan de Desarrollo Urbano, Plan de Desarrollo Rural, Esquema de Zonificación de Áreas Urbanas, Plan de Desarrollo de Asentamiento Humanos y demás planes específicos de acuerdo al plan de acondicionamiento territorial.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Elaborar y mantener actualizado el Plan de Zonificación de Usos de Suelo del Distrito de Ambo.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Elaborar y mantener actualizado el Catastro Urbano de la ciudad de Ambo.</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection