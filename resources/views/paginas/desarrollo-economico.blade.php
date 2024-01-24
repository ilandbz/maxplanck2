
@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    <h2 class="title">GERENCIA DE DESARROLLO ECONOMICO Y ADMINISTRACION TRIBUTARIA</h2>
                    <img src="imagenes/economico.jpg" class="img-fluid img-thumbnail" alt="GERENCIA DE DESARROLLO ECONOMICO Y ADMINISTRACION TRIBUTARIA">
                    <p style="text-align:justify !important;">
                      LA GERENCIA DE DESARROLLO ECONOMICO Y ADMINISTRACION TRIBUTARIA ES EL ORGANO DE LINEA ENCARGADA DE ORGANIZAR, CONTROLAR, DIRIGIR, EJECUTAR Y EVALUAR LAS ACTIVIDADES RELACIONADAS CON LA PROMOCION DEL DESARROLLO ECONOMICO, ASI COMO INCIDENCIA EN LA MICRO Y PEQUEÑA EMPRESA, A TRAVES DE PLANES DE DESARROLLO ECONOMICO, ASI COMO VER TODO LO CONCERNIENTE A LOS INGRESOS TRIBUTARIOS DE LA MUNICIPALIDAD, TENIENDO QUE ESTABLECER LAS ESTRATEGIAS Y MECANISMOS QUE LE PERMITAN RECAUDAR LAS CONTRIBUCIONES DE LOS VECINOS PARA EL NORMAL DESENVOLVIMIENTO DE LA ACTIVIDAD MUNICIPAL.
                    </p>
                    <h5 class="sub-title">Funciones</h5>
                    <ul class="courses-details-list">
                      <li>PROGRAMAR, DIRIGIR, EJECUTAR Y CONTROLAR LAS ACTIVIDADES VINCULADAS CON LA PROMOCIÓN DEL DESARROLLO ECONÓMICO LOCAL, EL CONTROL DEL COMERCIO AMBULATORIO Y LOS MERCADOS ADMINISTRADOS POR LA MUNICIPALIDAD.</li>
                      <li>PROMOVER LA ORGANIZACIÓN Y EJECUCIÓN DE FERIAS DE PRODUCTOS AGROINDUSTRIALES, ARTESANALES, SERVICIOS TURÍSTICOS, PEQUEÑOS Y MICROEMPRESAS, ENTRE OTROS, ORIENTADAS A DINAMIZAR LA ACTIVIDAD EMPRESARIAL EN LA PROVINCIA.</li>
                      <li>ELABORAR PROYECTOS DE FORTALECIMIENTO DE CAPACIDADES DE LAS CADENAS PRODUCTIVAS.</li>
                      <li>DIRIGIR, PROGRAMAR Y SUPERVISAR EL EMPADRONAMIENTO DE COMERCIANTES, INDUSTRIALES Y MICRO Y PEQUEÑAS EMPRESAS A NIVEL PROVINCIAL.</li>
                      <li>PROMOVER, CONTROLAR Y EVALUAR LAS ACTIVIDADES, PROGRAMAS Y PROYECTOS DIRIGIDOS A LA INVERSIÓN PRIVADA Y PÚBLICA EN ACTIVIDADES EN LAS QUE SE PRIORICE LA FORMACIÓN Y ASOCIATIVIDAD DE LAS MICRO Y PEQUEÑAS EMPRESAS.</li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="courses-sidebar pt-20">
                    <div class="courses-features mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Servicios</h4>
                        </div>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE PROMOCION EMPRESARIAL Y TURISMO</h6>
                          <li>TURISMO</li>
                          <li>EMISION DE LICENCIAS A MYPES</li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE FISCALIZACION Y CONTROL</h6>
                          <li>ORDENAMIENTO COMERCIO AMBULATORIO</li>
                          <li>FISCALIZACION PÚBLICA</li>
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
                          <li>PREDIOS</li>
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



