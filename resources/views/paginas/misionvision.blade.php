@extends('layout')
@section('body-content')
    @include('componentes.banner')

<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content mt-40">
                    <h2 class="about-title"><span>MISION</span> </h2>
                    <span class="line"></span>
                    <p>{{$organizacion->mision}}</p>
                    <br><br><br><br>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content mt-40">
                    <h2 class="about-title">VISION</span> </h2>
                    <span class="line"></span>
                    <p>{{$organizacion->vision}}</p>
                    <br><br><br><br>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--====== About Ends ======-->



@include('componentes.footer')
@endsection