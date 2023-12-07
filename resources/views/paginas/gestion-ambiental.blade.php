@extends('layout')
@section('body-content')
  @include('componentes.banner')
    <section class="about-area mb-4">
      <div class="container mb-4">
        <div class="courses-details-content mt-0">
            <h2 class="title">GERENCIA DE GESTIÓN AMBIENTAL Y RECURSOS NATURALES</h2>

            <div class="row">
              <div class="col">
                <h5 class="text-center mb-4">SUB-GERENCIA DE GESTIÓN INTEGRAL DE RESIDUOS SÓLIDOS</h5>
                <div class="row justify-content-center mb-4">
                    <img src="imagenes/srs.jpg" class="img-fluid img-thumbnail" alt="">
                </div>                
              </div>
              <div class="col">
                <h5 class="text-center mb-4">SUB GERENCIA DE ECOLOGIA Y RECURSOS NATURALES</h5>
                <div class="row justify-content-center mb-4">
                    <img src="imagenes/sg.jpg" class="img-fluid img-thumbnail" alt="">
                </div>                 
              </div>
              <div class="col">
                <h5 class="text-center mb-4">SUBGRENCIA DE AREA TECNICA MUNICIPAL Y SUB GERENCIA DE AGUA Y SANEAMIENTO</h5>
                <div class="row justify-content-center mb-4">
                    <img src="imagenes/ss.jpg" class="img-fluid img-thumbnail" alt="">
                </div>                 
              </div>              
            </div>           
            <div class="row">
              <div class="col-md-6">
                <h4>RECOLECCIÓN DE RESIDUOS SOLIDOS</h4>
                <ul>
                  <li>Horarios y rutas de recolección</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h4>PROGRAMA RECICLA AMBO</h4>
                <ul>
                  <li>Segregación en la fuente: recolección de residuos orgánicos e inorgánicos</li>
                  <li>Reciclador “AMBINITA”</li>
                  <li>Valorización de residuos orgánicos – Compost</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h4>FISCALIZACIÓN AMBIENTAL</h4>
                <ul>
                  <li>Denuncias ambientales</li>
                  <li>Monitoreos de ruido</li>
                  <li>Fiscalizaciones nocturnas</li>
                  <li>Fiscalización de vecinos cochinos</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h4>PROGRAMA EDUCCA</h4>
                <ul>
                  <li>ECO TRUEQUE</li>
                  <li>ECO CINE</li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </section>
  @include('componentes.footer')
@endsection