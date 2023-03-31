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
                <h3 class="m-1 font-weight-bold text-primary">Tus Cuidadores</h3>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary " href="{{route('cuidador.create')}}">Agregar Cuidador<i
                            class=" m-2 fa-solid fa-plus" style="color: #fcfcfc;"></i></a>
                </div>
            </div>

            <div class="mb-5 mt-5">
                <!-- contenido cuidadores -->
                <div class="d-flex justify-content-center flex-row ">
                    <div class="p-2">
                        <!-- vista de base de datos -->
                        <!-- card-1 -->
                        <div class="card shadow-sm">
                        @foreach($cuidadores as $cuidado)
                                <!-- imagen -->
                                <img src="" alt="" class="card-img-top">
                                <!-- descripcion de card cliente -->
                                <div class=" text-center text-inline-block">
                                    <!-- titulo-card -->
                                    <h4 class="card-title">{{$cuidado->nombre}}</h4>
                                    <!-- info card cuidador -->
                                    <p class="card-text">{{$cuidado->id}}</p>
                                    <p class="card-text">{{$cuidado->lugarTrabajo}}</p>
                                    <p class="card-text">{{$cuidado->parentesco}}</p>
                                    <p class="card-text">{{$cuidado->Telefono}}</p>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                </div>
                <div class="p-2"></div>
                <div class="p-2"></div>

            </div>
        </div>
    </div>

</div>

@include('layouts.footer')
