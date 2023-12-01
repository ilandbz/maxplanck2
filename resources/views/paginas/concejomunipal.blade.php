@extends('layout')
@section('body-content')
    @include('componentes.banner')

    <section class="teachers-area mt-0 mb-4 pt-0">
        <div class="container">            
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mt-40">
                        <h2 class="title">Regidores</h2>
                    </div>
                </div>
            </div>
            <div class="teachers-wrapper">
                <div class="row teachers-row">
                    @foreach ($regidores as $item)
                    <div class="col-md-4 col-sm-6 teachers-col">
                        <div class="single-teacher mt-30 text-center">
                            <div class="teacher-social">
                                <ul class="social">
                                    <li><a href="{{$item->link}}"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <div class="teacher-image">
                                <a href="teacher-details.html">
                                    <img src="{{asset('storage/fotos/'.$item->foto);}}" width="266" height="359" alt="teacher">
                                </a>
                            </div>
                            <div class="teacher-content">
                                <h4 class="name"><a href="teacher-details.html">{{$item->titulo}}</a></h4>
                                <span class="designation">{{$item->cargo->nombre}}</span>
                            </div>
                        </div>
                    </div>
    
                    @endforeach
    
                </div>
            </div>
        </div>
    </section>
<!--====== About Ends ======-->



@include('componentes.footer')
@endsection