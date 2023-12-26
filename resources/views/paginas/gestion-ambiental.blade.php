@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    

                    <h2 class="title">GESTION AMBIENTAL</h2>
                    <p style="text-align:justify !important;">
                      El terreno que ocupa actualmente Ambo, antiguamente pertenecía a la hacienda de Yanahuayra, fue allí que se construyeron algunas viviendas, hasta que finalmente se pobló y formó el caserío, y más tarde ciudad.
                      En los primeros informes indagados sobre la historia de la provincia de Ambo en los años 1539 y 1542, se produce la llegada de Iñigo Ortiz de Zúñiga personaje Español enviado por el Rey para realizar y evaluar la instalación europea como la expansión en la región, desplazándose por toda el área geográfica con el fin de empadronar para recaudar los impuestos, así como crear un “Núcleo y Asentamiento” de conquistadores que podrían dominar la entrada a la zona de la selva y controlar el rió Marañon, como había sido una frontera en tiempos del imperio incaico, al mismo tiempo combatir eficazmente la resistencia que mantenía el caudillo Illatopa en la zona de los andes; como crear centros poblados de soldados, mestizos y aventureros que podrían quebrar la paz colonial, enviando a los futuros encomenderos, empresarios donde la población indígena estaba concentrada.
                      Huánuco en aquellos tiempos era una ciudad muy importante por ser la zona de paso de actividad comercial andinas, y al mismo tiempo se desarrollaba la exportación de productos agrarios.
                      En la visita de Iñigo Ortiz a la provincia de Ambo se entrevista con Diego Xagua cacique principal del pueblo, a quien pregunta Iñigo cuantos pueblos tiene este repartimiento, y cuantos principales, respondiendo el personaje, treinta y nueve caciques y principales entre ellos Domingo Camari, hijo de Hernando Yoli difunto principal de Tambo. (Fuente “Visita de la provincia de león de Huánuco en 1562 Iñigo Ortiz de Zúñiga).
                    </p>


                    <div id="carouselExampleCaptions" class="carousel slide">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="imagenes/srs.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h4 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5)">SUB-GERENCIA DE GESTIÓN INTEGRAL DE RESIDUOS SÓLIDOS</h4>
                            {{-- <p>Some representative placeholder content for the first slide.</p> --}}
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="imagenes/sg.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h4 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5)">SUB GERENCIA DE ECOLOGIA Y RECURSOS NATURALES</h4>
                            {{-- <p>Some representative placeholder content for the second slide.</p> --}}
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="imagenes/ss.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h4 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5)">SUBGRENCIA DE AREA TECNICA MUNICIPAL Y SUB GERENCIA DE AGUA Y SANEAMIENTO</h4>
                            {{-- <p>Some representative placeholder content for the third slide.</p> --}}
                          </div>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>

                    <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish</p>

                    <h5 class="sub-title">Course Overview</h5>

                    <p>Bachelor of Business Administration(BBA) If you are going use a passage of Lorem Ipsum need equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. <br> <br> Bachelor of Business Administration(BBA) If you are going use a passage of Lorem Ipsum need equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus sae pe eveniet ut et voluptates repudiandae sint et molestiae.</p>

                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame belongs to those who fail in their duty through weakness </p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame belongs to those who fail in their duty through weakness </p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame belongs to those who fail in their duty through weakness </p>
                        </li>
                    </ul>
                </div>

                <div class="courses-details-tab">
                    <ul class="nav nav-justified">
                        <li class="nav-item"><a class="active" data-bs-toggle="tab" href="#benefit">Benefit</a></li>
                        <li class="nav-item"><a data-bs-toggle="tab" href="#curriculum">Course Curriculum</a></li>
                        <li class="nav-item"><a data-bs-toggle="tab" href="#teachers">Teachers</a></li>
                        <li class="nav-item"><a data-bs-toggle="tab" href="#reviews">Reviews</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="benefit">
                            <div class="benefit-content">
                                <p>Bachelor of Business Administration(BBA) If you are going use a passage of Lorem Ipsum need equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                                <ul class="courses-details-list">
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame belongs to those who fail in their duty through weakness </p>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame belongs to those who fail in their duty through weakness </p>
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle"></i>
                                        <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame belongs to those who fail in their duty through weakness </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="curriculum">
                            <div class="curriculum-content">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">1st Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">2nd Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">3rd Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">4th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">5th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">6th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">7st Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">8th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">9th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">10th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">11th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-curriculum">
                                            <h4 class="title">12th Semester</h4>
                                            <ul class="curriculum-list">
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Introduction</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.2: Know about BBA</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.3: How to improve</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.4: Business Math</a></li>
                                                <li><a href="#"><i class="fa fa-book"></i> Lessons 1.1: Social Marketing</a></li>
                                            </ul>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="teachers">
                            <div class="courses-teachers">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-teacher mt-30 text-center">
                                            <div class="teacher-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="teacher-image">
                                                <a href="teacher-details.html">
                                                    <img src="edumate/assets/images/teachers/teacher-1.webp" alt="teacher">
                                                </a>
                                            </div>
                                            <div class="teacher-content">
                                                <h4 class="name"><a href="teacher-details.html">Roberto Carlos</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-teacher mt-30 text-center">
                                            <div class="teacher-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="teacher-image">
                                                <a href="teacher-details.html">
                                                    <img src="edumate/assets/images/teachers/teacher-2.webp" alt="teacher">
                                                </a>
                                            </div>
                                            <div class="teacher-content">
                                                <h4 class="name"><a href="teacher-details.html">Roberto Carlos</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-teacher mt-30 text-center">
                                            <div class="teacher-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="teacher-image">
                                                <a href="teacher-details.html">
                                                    <img src="edumate/assets/images/teachers/teacher-3.webp" alt="teacher">
                                                </a>
                                            </div>
                                            <div class="teacher-content">
                                                <h4 class="name"><a href="teacher-details.html">Roberto Carlos</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <div class="courses-reviews">
                                <div class="review-wrapper">
                                    <div class="review-star">
                                        <div class="single-review">
                                            <span class="label">Stars 5</span>
                                            <div class="review-bar">
                                                <div class="bar-inner" style="width: 100%;"></div>
                                            </div>
                                            <span class="value">35</span>
                                        </div>
                                        <div class="single-review">
                                            <span class="label">Stars 4</span>
                                            <div class="review-bar">
                                                <div class="bar-inner" style="width: 80%;"></div>
                                            </div>
                                            <span class="value">10</span>
                                        </div>
                                        <div class="single-review">
                                            <span class="label">Stars 3</span>
                                            <div class="review-bar">
                                                <div class="bar-inner" style="width: 55%;"></div>
                                            </div>
                                            <span class="value">8</span>
                                        </div>
                                        <div class="single-review">
                                            <span class="label">Stars 2</span>
                                            <div class="review-bar">
                                                <div class="bar-inner" style="width: 0;"></div>
                                            </div>
                                            <span class="value">0</span>
                                        </div>
                                        <div class="single-review">
                                            <span class="label">Stars 1</span>
                                            <div class="review-bar">
                                                <div class="bar-inner" style="width: 0;"></div>
                                            </div>
                                            <span class="value">0</span>
                                        </div>
                                    </div>
                                    <div class="review-point">
                                        <span>4.9</span>
                                    </div>
                                </div>

                                <div class="review-form">
                                    <div class="review-rating">
                                        <h5 class="title">Write a Review</h5>

                                        <ul id='stars'>
                                            <li class='star' title='Poor' data-value='1'>
                                              <i class='fas fa-star'></i>
                                            </li>
                                            <li class='star' title='Fair' data-value='2'>
                                              <i class='fas fa-star'></i>
                                            </li>
                                            <li class='star' title='Good' data-value='3'>
                                              <i class='fas fa-star'></i>
                                            </li>
                                            <li class='star' title='Excellent' data-value='4'>
                                              <i class='fas fa-star'></i>
                                            </li>
                                            <li class='star' title='WOW!!!' data-value='5'>
                                              <i class='fas fa-star'></i>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="review-form-wrapper">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" placeholder="Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-form">
                                                        <textarea placeholder="Write here..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-form">
                                                        <button class="main-btn">Submit now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="edumate/assets/images/courses-details.webp" width="845" height="533" alt="Course Details">
            </div>
            <div class="col-lg-3">
                <div class="courses-sidebar pt-20">
                    <div class="courses-features mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Servicios</h4>
                        </div>
                        <ul class="courses-features-items">
                          <h6>RECOLECCIÓN DE RESIDUOS SOLIDOS</h6>
                          <li><a href="">BIBLIOTECA</a></li>
                          <li><a href="">CENTRO CULTURAL</a></li>
                          <li><a href="">CASA MATERNA – ESTHER BLANCO DE MARTINEZ</a></li>
                        </ul>
                        <ul>
                          <h6>RECOLECCIÓN DE RESIDUOS SOLIDOS</h6>
                          <li><a href=""> Horarios y rutas de recolección</li>
                        </ul>
                        <ul>
                          <h6>PROGRAMA RECICLA AMBO</h6>
                          <li><a href="">Segregación en la fuente: recolección de residuos orgánicos e inorgánicos</a></li>
                          <li><a href="">Reciclador “AMBINITA”</a></li>
                          <li><a href="">Valorización de residuos orgánicos – Compost</a></li>
                        </ul>
                    </div>

                    <div class="courses-sidebar-banner mt-30">
                        <a href="#">
                            <img src="edumate/assets/images/banner.webp" width="270" height="310" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  @include('componentes.footer')
@endsection
