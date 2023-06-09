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
            {{-- table contenido --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Administracion</th>
                                <th>Descripcion</th>
                                <th>Tratamiento</th>
                                <!-- <th>Operaciones</th> -->
                            </tr>
                        <tbody>
                            {{-- consulta eloquente en vista  --}}
                            @foreach($medicamentos as $medicamento)
                            <tr>
                                <td>{{$medicamento->id}}</td>
                                <td>{{$medicamento->nombre}}</td>
                                <td>{{$medicamento->tipo}}</td>
                                <td>{{$medicamento->descripcion}}</td>
                                <td>
                                    <div class="row justify-content-center">
                                        <div class="col-auto">
                                            <form action="medicamento/{{$medicamento->id}}" method="post">
                                                {!! csrf_field() !!}
                                                @method("delete")
                                                <button class="btn btn-danger " type="submit"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>






        </div>
    </div>

    @include('layouts.footer')
