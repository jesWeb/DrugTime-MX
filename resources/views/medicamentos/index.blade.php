@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-3">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-1 font-weight-bold text-primary">Tus Medicamentos</h3>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary " href="{{route('medicamento.create')}}">Agregar Medicamento<i
                            class=" m-2 fa-solid fa-plus" style="color: #fcfcfc;"></i></a>
                </div>
            </div>

            <div class="mb-5 mt-5">
                <!-- contenido cuidadores -->
                <div class="row justify-content-center">
                    <!-- vista de base de datos -->
                    <!-- card-1 -->
                    <div class="col-auto">
                        <div class="card cards-today rounded shadow-sm cliente-card">
                            <!-- imagen -->
                            @foreach($medicamentos as $medicamento)
                            <!-- descripcion de card cliente -->
                            <div class="card-body text-center">
                                <!-- titulo-card -->
                                <h4 class="card-title">{{$medicamento->nombre}}</h4>
                                <!-- info card cuidador -->
                                <p class="card-text">{{$medicamento->tipo}}</p>
                                <p class="card-text">{{$medicamento->descripcion}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
