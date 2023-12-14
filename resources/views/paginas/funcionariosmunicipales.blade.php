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
                            <h4 class="name"><a href="" id="enlaceAlcalde" data-bs-toggle="modal" data-bs-target="#miModal"
                                data-titulo="{{$item->titulo}}" 
                                data-foto="{{$item->foto}}"
                                data-dni="{{$item->dni}}"
                                data-cargo="{{$item->cargo->nombre}}"
                                data-email="{{$item->email}}"
                                data-celular="{{$item->celular}}"
                                data-img="{{asset('storage/fotos/'.$item->foto)}}"
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
<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Título del Modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
            <section class="teacher-details">
                <div class="container">
                    <div class="row teachers-row justify-content-center">
                        <div class="col-lg-5 col-md-6 col-sm-8 teachers-col">
                            <img id="imagenModal" class="img-fluid img-thumbail" alt="">
                        </div>
                        <div class="col-lg-5 teachers-col">
                            <div class="teacher-details-content mt-45">
                                <h6 class="teacher-name" id="namemodal"></h6>
                                <span class="designation"></span><br>
                                <span class="department"></span>
                                <ul class="teacher-contact">
                                    <li><strong>DNI:</strong> <span id="dni"></span></li>
                                    <li><strong>Email:</strong> <span id="email"></span></li>
                                    <li><strong>Telefono:</strong> <span id="celular"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>


@include('componentes.footer')
@endsection
@section('script')
<script>
$('#miModal').on('show.bs.modal', function (event) {
  var boton = $(event.relatedTarget);
  var cargo = boton.data('cargo');
  var titulo = boton.data('titulo');
  var imgSrc = boton.data('img');
  var dni = boton.data('dni');
  $('#ModalLabel').html(cargo);
  $('#imagenModal').attr('src', imgSrc);
  $('#namemodal').html(titulo);
  $('#dni').html(dni);
});

</script>
@endsection
