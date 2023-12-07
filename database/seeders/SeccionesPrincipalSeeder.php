<?php

namespace Database\Seeders;

use App\Models\SeccionesPrincipal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeccionesPrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeccionesPrincipal::firstOrCreate([
            'titulo'   => 'Video',
            'orden'     => 1,
            'contenido'   => '
            <section class="blog-area">
              <div class="container">
              <h1>VIDEOS</h1><br>
              <div style="width: 100%;">
                <iframe width="100%" height="615" src="https://www.youtube.com/embed/dXtMMuu8aeo?si=Z7RmASBckJenYF2Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
              </div>
            </div>
          </section>
            '
        ]);
        
        SeccionesPrincipal::firstOrCreate([
            'titulo'   => 'Servicios',
            'orden'     => 2,
            'contenido'   => '<!--====== Servicios ======-->
            <section class="top-courses-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title mt-40">
                            <h2 class="title">Servicios</h2>
                        </div>
                    </div>
                </div>
                <div class="courses-wrapper fadeInUpBig">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="gestion-ambiental"><img src="imagenes/rga.jpg" width="270" height="170" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <h4 class="courses-title"><a href="gestion-ambiental">Gerencia Municipal</a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">Gerencia Municipal</p>
                                            <p class="fee">Gerencia Municipal</p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="more" href="gestion-ambiental">Ver Mas <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="gestion-ambiental"><img src="imagenes/rga.jpg" width="270" height="170" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <h4 class="courses-title"><a href="gestion-ambiental">GERENCIA DE LA OFICINA DE ATENCIÓN AL CIUDADANO</a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">Gerencia de Oficina</p>
                                            <p class="fee">de Atencion al Ciudadano</p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="more" href="gestion-ambiental">Ver Mas <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="gestion-ambiental"><img src="imagenes/rga.jpg" width="270" height="170" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <h4 class="courses-title"><a href="gestion-ambiental">GERENCIA DE LA OFICINA GENERAL DE ADMINISTRACIÓN</a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">Gerencia de Oficina</p>
                                            <p class="fee">General de Administracion</p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="more" href="gestion-ambiental">Ver Mas <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="gestion-ambiental"><img src="imagenes/rga.jpg" width="270" height="170" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <h4 class="courses-title"><a href="gestion-ambiental">GERENCIA DE LA OFICINA GENERAL DE PLANEAMIENTO Y PRESUPUESTO</a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">GERENCIA DE LA OFICINA GENERAL</p>
                                            <p class="fee">DE PLANEAMIENTO Y PRESUPUESTO</p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="more" href="gestion-ambiental">Ver Mas <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="gestion-ambiental"><img src="imagenes/rga.jpg" width="270" height="170" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <h4 class="courses-title"><a href="gestion-ambiental">GERENCIA TERRITORIAL E INFRAESTRUCTURA</a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">GERENCIA TERRITORIAL</p>
                                            <p class="fee">INFRAESTRUCTURA</p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="more" href="gestion-ambiental">Ver Mas <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="gestion-ambiental"><img src="imagenes/rga.jpg" width="270" height="170" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <h4 class="courses-title"><a href="gestion-ambiental">GERENCIA DE LA OFICINA GENERAL DE ASESORÍA LEGAL</a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">GERENCIA DE LA OFICINA</p>
                                            <p class="fee">GENERAL DE ASESORÍA LEGAL</p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="more" href="gestion-ambiental">Ver Mas <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>                                                                   
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="gestion-ambiental"><img src="imagenes/rga.jpg" width="270" height="170" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <h4 class="courses-title"><a href="gestion-ambiental">Gerencia de Gestion Ambiental y Recursos Naturales</a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">Gestion Ambiental</p>
                                            <p class="fee">Recursos Naturales</p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="more" href="gestion-ambiental">Ver Mas <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>                
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="desarrollo-social"><img src="imagenes/rga.jpg" width="270" height="170" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <h4 class="courses-title"><a href="desarrollo-social">Gerencia de Desarrollo Social</a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">Gerencia</span></p>
                                            <p class="fee">Desarrollo Social</p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="more" href="desarrollo-social">Ver Mas <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="desarrollo-economico"><img src="imagenes/rga.jpg" width="270" height="170" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <h4 class="courses-title"><a href="desarrollo-economico">Gerencia de Desarrollo Economico y Administracion Tributario</a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">Desarrollo Economico</p>
                                            <p class="fee">Administracion Tributario</p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="more" href="desarrollo-economico">Ver Mas <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!--====== Top Courses Ends ======-->'
        ]);

        SeccionesPrincipal::firstOrCreate([
            'titulo'        => 'enlaces_principales',
            'orden'     => 3,
            'contenido'     => '<!--====== enlaces_principales ======-->
            <div class="specialty-area">
            <div class="container">
                <div class="row no-gutters wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="col-sm-4">
                        <a href="https://facilita.gob.pe/t/1258" target="_blank">
                            <div class="single-specialty mt-30">
                                <div class="specialty-box">
                                    <div class="box-icon">
                                        <img src="edumate/assets/images/icon/icon-1.webp" width="70" height="70" alt="icon">
                                    </div>
                                    <div class="box-content">
                                        <p>Mesa de Partes Virtual</p>
                                    </div>
                                </div>
                            </div>                    
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" target="_blank">
                        <div class="single-specialty active mt-30">
                            <div class="specialty-box">
                                <div class="box-icon">
                                    <img src="edumate/assets/images/icon/icon-2.webp" width="70" height="70" alt="icon">
                                </div>
                                <div class="box-content">
                                    <p>Libro de Reclamaciones</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://facilita.gob.pe/seguimiento" target="_blank">
                        <div class="single-specialty mt-30">
                            <div class="specialty-box">
                                <div class="box-icon">
                                    <img src="edumate/assets/images/icon/icon-3.webp" width="70" height="70" alt="icon">
                                </div>
                                <div class="box-content">
                                    <p>Seguimiento de Tramites</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
            <!--====== Specialty Ends ======-->'
        ]);
        
        SeccionesPrincipal::firstOrCreate([
            'titulo'        => 'Plataforma de Multimedi',
            'orden'     => 4,
            'contenido'     => '    <!--====== Plataforma de Multimedi ======-->
            <section class="campus-visit-area">
                <div class="container">
                    <div class="campus-visit-wrapper">
                        <div class="campus-image-col">
                            <div class="campus-image">
                                <div class=" single-campus">
                                    <img src="edumate/assets/images/campus-1.webp" width="521" height="392" alt="Campus">
                                </div>
                                <div class="single-campus">
                                    <img src="edumate/assets/images/campus-2.webp" width="521" height="392" alt="Campus">
                                </div>
                            </div>
                        </div>
                        <div class="campus-content-col">
                            <div class="campus-content">
                                <h2 class="campus-title">Visita Nuestra Galeria Multimedia</h2>
                                <span class="line"></span>
                                <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need</p>
                                <h3 class="video-title">O Reproduce Nuestros Videos</h3>
                                <a class="play video-popup" href="https://www.youtube.com/channel/UCVmWraKZdpxlQJ97dSGryyQ"><i class="fas fa-play"></i> <span>Play now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--====== Campus Visit Ends ======-->'
        ]);


        SeccionesPrincipal::firstOrCreate([
            'titulo'        => 'Testimonials Start',
            'orden'     => 6,
            'contenido'     => '    <!--====== Testimonials Start ======-->
            <section class="testimonials-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="testimonials-title">
                                <h2 class="title">Our Students Review</h2>
                                <span class="line"></span>
                                <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need desire to obtain pain of itself, because it is pain de sires to obtain pain of itself occur</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="testimonials-wrapper">
                                <div class="testimonials-shape shape-1"></div>
                                <div class="testimonials-shape shape-2"></div>
                                <div class="testimonials-shape shape-3"></div>
        
                                <div class="row no-gutters">
                                    <div class="col-lg-6 col-md-5">
                                        <div class="testimonials-image">
                                            <div class="single-testimonial-image">
                                                <img src="edumate/assets/images/testimonials-1.webp" width="313" height="579" alt="testimonials">
                                            </div>
                                            <div class="single-testimonial-image">
                                                <img src="edumate/assets/images/testimonials-2.webp" width="313" height="579" alt="testimonials">
                                            </div>
                                            <div class="single-testimonial-image">
                                                <img src="edumate/assets/images/testimonials-3.webp" width="313" height="579" alt="testimonials">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7">
                                        <div class="testimonials-content">
                                            <div class="single-testimonial-content">
                                                <div class="content-text">
                                                    <i class="fas fa-quote-right"></i>
                                                    <p>Best pleasure rationally encounter consequences that are very nice a again is there anyone who loves or desires to obtain pain of itself</p>
                                                </div>
                                                <div class="content-meta">
                                                    <p class="name">Alex Smith</p>
                                                    <p class="designation">CEO, Xelopex Group</p>
                                                </div>
                                            </div>
                                            <div class="single-testimonial-content">
                                                <div class="content-text">
                                                    <i class="fas fa-quote-right"></i>
                                                    <p>Best pleasure rationally encounter consequences that are very nice a again is there anyone who loves or desires to obtain pain of itself</p>
                                                </div>
                                                <div class="content-meta">
                                                    <p class="name">Alex Smith</p>
                                                    <p class="designation">CEO, Xelopex Group</p>
                                                </div>
                                            </div>
                                            <div class="single-testimonial-content">
                                                <div class="content-text">
                                                    <i class="fas fa-quote-right"></i>
                                                    <p>Best pleasure rationally encounter consequences that are very nice a again is there anyone who loves or desires to obtain pain of itself</p>
                                                </div>
                                                <div class="content-meta">
                                                    <p class="name">Alex Smith</p>
                                                    <p class="designation">CEO, Xelopex Group</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--====== Testimonials Ends ======-->'
        ]);

        SeccionesPrincipal::firstOrCreate([
            'titulo'        => 'Counter Start',
            'orden'     => 7,
            'contenido'     => '    <!--====== Counter Start ======-->
            <div class="counter-area">
                <div class="container">
                    <div class="counter-wrapper bg_cover" style="background-image: url(edumate/assets/images/counter-bg.webp);">
                        <div class="row">
                            <div class="col-sm-3 col-6 counter-col">
                                <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <span class="counter-count"><span class="count" data-count="3652">0</span> +</span>
                                    <p>Students</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6 counter-col">
                                <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <span class="counter-count"><span class="count" data-count="105">0</span> +</span>
                                    <p>Faculties</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6 counter-col">
                                <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <span class="counter-count"><span class="count" data-count="120">0</span> +</span>
                                    <p>Branches</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6 counter-col">
                                <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.8s">
                                    <span class="counter-count"><span class="count" data-count="30">0</span> +</span>
                                    <p>Awards win</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Counter Ends ======-->'
        ]);        

        SeccionesPrincipal::firstOrCreate([
            'titulo'        => 'Newsletter Start',
            'orden'         => 8,
            'es_activo'     => 0,
            'contenido'     => '<!--====== Newsletter Start ======-->
            <section class="newsletter-area">
                <div class="container">
                    <div class="newsletter-wrapper bg_cover wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s" style="background-image: url(edumate/assets/images/newsletter-bg-1.webp);">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="section-title-2 mt-25">
                                    <h2 class="title">Subscribe our Newsletter</h2>
                                    <span class="line"></span>
                                    <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need some</p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="newsletter-form mt-30">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your email here">
                                        <button class="main-btn main-btn-2">Subscribe now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--====== Newsletter Ends ======-->'
        ]);


    }
}
