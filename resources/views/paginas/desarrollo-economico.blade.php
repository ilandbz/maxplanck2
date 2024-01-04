
@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">GERENCIA DE DESARROLLO ECONOMICO Y ADMINISTRACION TRIBUTARIA</h2>
  

                    <img src="imagenes/economico.jpg" width="845" height="533" alt="Course Details">

                </div>

            </div>
            <div class="col-lg-3">
                <div class="courses-sidebar pt-20">
                    <div class="courses-features mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Servicios</h4>
                        </div>
                        <ul class="courses-features-items">
                          <h6>TURISMO</h6>
                          <li>EMISION DE LICENCIAS A MYPES</li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE FISCALIZACION Y CONTROL</h6>
                          <li>ORDENAMIENTO COMERCIO AMBULATORIO</li>
                          <li>FISCALIZACION</li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE TRANSITO Y TRANSPORTE TERRESTRE</h6>
                          <li>ORDENAMIENTO TRANSITO VEHICULAR</li>
                          <li>FISCALIZACION CONTROL DE TRANSITO PUBLICO RURAL / URBANO</li>
                        </ul>
                        <ul class="courses-features-items">
                          <h4>SUBGERENCIA DE SERVICIOS AGROPECUARIOS</h4>

                        </ul>                        
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE RENTAS</h6>

                        </ul> 
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE SEGURIDAD CIUDADANA</h6>

                        </ul> 

                        <ul class="courses-features-items">
                          <h4>SUBGERENCIA DE RENTAS</h4>

                        </ul>                         
                        <ul class="courses-features-items">
                          <h4>SUBGERENCIA DE EJECUCION COACTIVA</h4>

                        </ul>  
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection



