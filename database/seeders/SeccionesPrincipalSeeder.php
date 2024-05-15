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
