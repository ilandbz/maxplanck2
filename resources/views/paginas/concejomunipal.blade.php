@extends('layout')
@section('body-content')
    @include('componentes.banner')

<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Apellido y Nombres</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Email</th>
                        <th scope="col">Foto</th>
                      </tr>
                    </thead>
                    <tbody>


                        @foreach ($regidores as $item)
                        <tr>
                            <td scope="col">{{ $loop->index + 1 }}</td>
                            <td scope="col">{{$item->titulo}}</td>
                            <td scope="col">{{$item->cargo->nombre}}</td>
                            <td scope="col">{{$item->celular}}</td>
                            <td scope="col">{{$item->email}}</td>
                            <td scope="col"><img src="{{asset('storage/fotos/'.$item->foto);}}" class="img-fluid img-thumbnail rounded" alt="{{$item->cargo->nombre}}" style="max-width: 100px; max-height: 100px;"></td>
                        </tr>                            
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</section>
<!--====== About Ends ======-->



@include('componentes.footer')
@endsection