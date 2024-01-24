@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">GERENCIA DE DESARROLLO SOCIAL</h2>
                    <img src="imagenes/sociales.jpg" class="img-fluid img-thumbnail" alt="GERENCIA DE DESARROLLO SOCIAL">
                    <p style="text-align:justify !important;">
                      El terreno que ocupa actualmente Ambo, antiguamente pertenecía a la hacienda de Yanahuayra, fue allí que se construyeron algunas viviendas, hasta que finalmente se pobló y formó el caserío, y más tarde ciudad.
                      En los primeros informes indagados sobre la historia de la provincia de Ambo en los años 1539 y 1542, se produce la llegada de Iñigo Ortiz de Zúñiga personaje Español enviado por el Rey para realizar y evaluar la instalación europea como la expansión en la región, desplazándose por toda el área geográfica con el fin de empadronar para recaudar los impuestos, así como crear un “Núcleo y Asentamiento” de conquistadores que podrían dominar la entrada a la zona de la selva y controlar el rió Marañon, como había sido una frontera en tiempos del imperio incaico, al mismo tiempo combatir eficazmente la resistencia que mantenía el caudillo Illatopa en la zona de los andes; como crear centros poblados de soldados, mestizos y aventureros que podrían quebrar la paz colonial, enviando a los futuros encomenderos, empresarios donde la población indígena estaba concentrada.
                      Huánuco en aquellos tiempos era una ciudad muy importante por ser la zona de paso de actividad comercial andinas, y al mismo tiempo se desarrollaba la exportación de productos agrarios.
                      En la visita de Iñigo Ortiz a la provincia de Ambo se entrevista con Diego Xagua cacique principal del pueblo, a quien pregunta Iñigo cuantos pueblos tiene este repartimiento, y cuantos principales, respondiendo el personaje, treinta y nueve caciques y principales entre ellos Domingo Camari, hijo de Hernando Yoli difunto principal de Tambo. (Fuente “Visita de la provincia de león de Huánuco en 1562 Iñigo Ortiz de Zúñiga).
                    </p>

                    

                </div>

            </div>
            <div class="col-lg-3">
                <div class="courses-sidebar pt-20">
                    <div class="courses-features mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Servicios</h4>
                        </div>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE DESARROLLO HUMANO EDUCACION Y SALUD</h6>
                          <li>BIBLIOTECA</li>
                          <li>CENTRO CULTURAL</li>
                          <li>CASA MATERNA – ESTHER BLANCO DE MARTINEZ</li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE DEMUNA, CIAM Y OMAPED</h6>
                          <li>DEMUNA</li>
                          <li>CIAM</li>
                          <li>OMAPED</li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE PROGRAMAS SOCIALES E INCLUSION SOCIAL</h6>
                          <li>SISFOH</li>
                          <li>PROGRAMA PENSION 65</li>
                          <li>PROGRAMA JUNTOS</li>
                          <li>SUBGERENCIA DE ALIMENTACION Y NUTRICION</li>
                          <li>PROGRAMA VASO DE LECHE</li>
                          <li>COMPLEMENTACION ALIMENTACIÓN</li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE REGISTRO CIVIL</h6>

                        </ul>                        
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE RENTAS</h6>

                        </ul> 
                        <ul class="courses-features-items">
                          <h6>SUBGERENCIA DE SEGURIDAD CIUDADANA</h6>

                        </ul> 

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection