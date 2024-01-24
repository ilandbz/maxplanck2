@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">GESTION AMBIENTAL</h2>

                    <img src="imagenes/srs.jpg" class="img-fluid img-thumbnail mt-4" alt="GESTION AMBIENTAL">

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
                          <h6>RECOLECCIÓN DE RESIDUOS SOLIDOS</h6>
                          <li><a href="">Horarios y rutas de recolección</a></li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>PROGRAMA RECICLA AMBO</h6>
                          <li><a href="">Segregación en la fuente: recolección de residuos orgánicos e inorgánicos</a></li>
                          <li><a href="">Reciclador “AMBINITA”</a></li>
                          <li><a href="">Valorización de residuos orgánicos – Compost </a></li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>FISCALIZACIÓN AMBIENTAL</h6>
                          <li><a href="">Denuncias ambientales</a></li>
                          <li><a href="">Monitoreos de ruido </a></li>
                          <li><a href="">Fiscalizaciones nocturnas</a></li>
                          <li><a href="">Fiscalización de vecinos cochinos </a></li>
                        </ul>
                        <ul class="courses-features-items">
                          <h6>PROGRAMA EDUCCA</h6>
                          <li><a href="">ECO TRUEQUE</a></li>
                          <li><a href="">ECO CINE</a></li>                          
                        </ul>                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection
