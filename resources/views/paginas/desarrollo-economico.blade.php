@extends('layout')
@section('body-content')
  @include('componentes.banner')
    <section class="about-area mb-4">
      <div class="container mb-4">
        <div class="courses-details-content mt-0">
            <h2 class="title">GERENCIA DE DESARROLLO ECONOMICO Y ADMINISTRACION TRIBUTARIA</h2>
            <h5 class="text-center">SUB-GERENCIA DE GESTIÓN INTEGRAL DE RESIDUOS SÓLIDOS</h5>
            <div class="row">
              <div class="col-md-6">
                <h4>TURISMO</h4>
                <ul>
                  <li>EMISION DE LICENCIAS A MYPES</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h4>SUBGERENCIA DE FISCALIZACION Y CONTROL</h4>
                <ul>
                  <li>ORDENAMIENTO COMERCIO AMBULATORIO</li>
                  <li>FISCALIZACION</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h4>SUBGERENCIA DE TRANSITO Y TRANSPORTE TERRESTRE</h4>
                <ul>
                  <li>ORDENAMIENTO TRANSITO VEHICULAR</li>
                  <li>FISCALIZACION CONTROL DE TRANSITO PUBLICO RURAL / URBANO</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h4>SUBGERENCIA DE SERVICIOS AGROPECUARIOS</h4>

              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h4>SUBGERENCIA DE RENTAS</h4>

              </div>
              <div class="col-md-6">
                <h4>SUBGERENCIA DE EJECUCION COACTIVA</h4>

              </div>
            </div>            
        </div>
      </div>
    </section>
  @include('componentes.footer')
@endsection