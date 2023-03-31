    @include('layouts.header')

    @include('layouts.menu')


    @section('header')

    @endsection

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Agrega un medicamento</h1>
        </div>

        <div class="container">
            <div class="d-flex justify-content-center aling-content-center">
                <div class="shadow card-body mt-4">
                    <div class="">
                        <h4 class="text-center m-3">Registra tu Medicamento</h4>
                        <div class="">
                            <img src="" alt="">
                        </div>
                    </div>
                    <form action="{{route('medicamento.store')}}" ectype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <!--Nombre -->
                        <div class="mb-4">
                            <label for="text" class="form-label">Nombre </label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ejemplo: paracetamol"
                                require id="">
                        </div>
                        <!--Descripcion -->
                        <div class="form-group">
                            <label for="">¿Para que usaras este medicamento?</label>

                            <input type="text" class="form-control" name="descripcion" id="descripcion">
                        </div>
                        <!--Tipo -->
                        <div class="mb-4">
                            <label for="text" class="form-label">Administracion </label>
                            <input type="text" class="form-control" name="tipo" placeholder="Ejemplo: oral" require
                                id="">
                        </div>

                        <div class="form-group">
                            <label for="">Tratamiento
                            <select class="form-control form-select"
                                    aria-label="escige el tratamiento al que pertenece" name="tratamientos_id">
                                    <option selected>Tratamiento</option>
                                    @foreach($recomendacion as $recomend)
                                    <option value="{{$recomendacion->id}}">{{$recomend->nombre}}</option>
                                    @endforeach
                                </select>
                            </label>

                        </div>

                        <!-- btn -->
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
    @include('layouts.footer')
