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
              <h1 class="text-center bg-info text-white font-weight-bold" style="font-weight: 900">VIDEOS</h1><br>
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
            <h1 class="text-center bg-info text-white font-weight-bold" style="font-weight: 900">SERVICIOS</h1><br>
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
