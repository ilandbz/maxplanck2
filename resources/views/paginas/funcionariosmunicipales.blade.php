@extends('layout')
@section('body-content')
@include('componentes.banner')
<section class="teachers-area mt-0 mb-4 pt-0">
    <div class="container">            
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title mt-40">
                    <h2 class="title">Funcionarios</h2>
                </div>
            </div>
        </div>
        <div class="teachers-wrapper">
            <div class="row teachers-row">

                @foreach ($funcionarios as $item)
                <div class="col-md-4 col-sm-6 teachers-col">
                    <div class="single-teacher mt-30 text-center">
                        <div class="teacher-social">
                            <ul class="social">
                                <li><a href="{{$item->link}}" target="_blank"><i class="fas fa-link"></i></a></li>
                            </ul>
                        </div>
                        <div class="teacher-image">
                            <img src="{{asset('storage/fotos/'.$item->foto);}}" width="266" height="359" alt="teacher">
                        </div>
                        <div class="teacher-content">
                            <h4 class="name"><a href="" id="enlaceAlcalde" data-bs-toggle="modal"
                                data-titulo="{{$item->titulo}}" 
                                data-foto="{{$item->foto}}"
                                data-dni="{{$item->dni}}"
                                data-email="{{$item->email}}"
                                data-celular="{{$item->celular}}"
                                >{{$item->titulo}}</a></h4>
                            <span class="designation">{{$item->cargo->nombre}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
  
<!-- Modal -->
<div class="modal fade" id="exampleModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Alcalde</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <section class="teacher-details mb-20">
                <div class="container">
                    <div class="row teachers-row justify-content-center">
                        <div class="col-lg-5 col-md-6 col-sm-8 teachers-col">
                            <div class="single-teacher-details mt-50 text-center">
                                <div class="teacher-social">
                                    <ul class="social">
                                        <li><a href="" target="_blank"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <div class="teacher-image">
                                        <a href="teacher-details.html">
                                        <img src="{{asset('storage/fotos/'.$item->foto);}}" width="373" height="503" alt="teacher">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 teachers-col">
                            <div class="teacher-details-content mt-45">
                                <h4 class="teacher-name">{{$item->titulo}}</h4>
                                <span class="designation">{{$item->cargo->nombre}}</span><br>
                                <span class="department">{{$item->area->nombre}}</span>
                                <ul class="teacher-contact">
                                    <li><strong>DNI:</strong> <a href="#">{{$item->dni}}</a></li>
                                    <li><strong>Email:</strong> <a href="#">{{$item->email}}</a></li>
                                    <li><strong>Telefono:</strong> <a href="#">{{$item->celular}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

@include('componentes.footer')
@endsection
