@extends('layout')
@section('body-content')
  @include('componentes.banner')

  <section class="courses-details mb-20">
    <div class="container bg-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="courses-details-content mt-50">
                    <img src="imagenes/enftecnica.jpg" width="845" height="533" alt="Mecanica Automotriz">
                    <h2 class="title">MECANICA AUTOMOTRIZ</h2>
                    <p>
                        El Profesional Técnico en Mecatrónica Automotriz, es  competente para la realización de diagnóstico, mantenimiento y reparación apropiada de las unidades automotrices, utilizando equipos y herramientas  de diagnóstico y tecnologías de la información, gestionando a su vez el taller de servicio automotriz aplicando técnicas de gestión enfocado en costos , y  con capacidad de comunicación asertiva en la interpretación de textos, manuales y catálogos en el idioma inglés; que le permitan interactuar con el entorno social, empresarial, en el sector productivo y proyectos de innovación que faciliten su actividad profesional, capaz de abordar situaciones y resolver problemas relacionado a su actividad y la organización,  asumiendo liderazgo y actitud ética en su accionar, contribuyendo a la preservación y conservación del medio ambiente y trabajando conforme a los estándares de seguridad industrial.
                    </p>
                    <br>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan="2">Duración de Estudios</th>
                                <td>3 años</td>
                            </tr>
                            <tr>
                                <th colspan="2">Título a Nombre de la Nación</th>
                                <td>Profesional Técnico en Mecanica Automotriz</td>
                            </tr>
                            <tr>
                                <th colspan="2">Certificación</th>
                                <td>Por Módulos Profesionales</td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="courses-details-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Conocimientos básicos de matemáticas</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Conocimientos básicos de la ciencia de la salud, Biología, Química, Anatomía y Fisiología Humana.</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Habilidades para la comunicación efectiva verbal y escrita, trabajo en equipo, comprensión de textos y capacidad de observación</p>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <p>Actitud para la investigación tecnológica con conocimiento de métodos lógicos</p>
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
                                                    <img src="assets/images/teachers/teacher-1.webp" alt="teacher">
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
                                                    <img src="assets/images/teachers/teacher-2.webp" alt="teacher">
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
                                                    <img src="assets/images/teachers/teacher-3.webp" alt="teacher">
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
            </div>
            <div class="col-lg-3">
                <div class="courses-sidebar pt-20">
                    <div class="courses-features mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Course Features</h4>
                        </div>
                        <ul class="courses-features-items">
                            <li>Free <strong>$225</strong></li>
                            <li>Duration <strong>4 years</strong></li>
                            <li>Credit <strong>180</strong></li>
                            <li>Semester <strong>12</strong></li>
                            <li>Quizzes <strong>2</strong></li>
                            <li>Pass Parcentages <strong>80%</strong></li>
                            <li>Maximum Retakes <strong>5</strong></li>
                            <li>Rating <strong>4.9(80 reviews)</strong></li>
                        </ul>
                        <div class="sidebar-btn">
                            <a class="main-btn" href="#">Enroll Course</a>
                        </div>
                    </div>

                    <div class="courses-sidebar-banner mt-30">
                        <a href="#">
                            <img src="assets/images/banner.webp" width="270" height="310" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</section>

  @include('componentes.footer')
@endsection