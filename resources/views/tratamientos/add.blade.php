@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection

<div class="container-fluid mb-5">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Agrega un Tratamiento</h1>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center aling-content-center">
            <div class="shadow card-body mt-4">
                <div class="">
                    <h4 class="text-center m-3">Registra a tu Tratamiento</h4>
                    <div class="">
                        <img src="" alt="">
                    </div>
                </div>
                <form action="{{route('medicamento.store')}}" ectype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <!--Nombre -->
                    <div class="mb-4">
                        <label for="text" class="form-label">Nombre </label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ejemplo:@nombre" require
                            id="">
                    </div>
                    <!--Nombre -->
                    <div class="mb-4">
                        <label for="text" class="form-label"> Cantidad de medicameto</label>
                        <input type="text" class="form-control" name="dosis" id="" placeholder="1 pastilla">
                    </div>
                    <!-- horario -->
                    <div class="mb-4">
                        <label for="time" class="form-label">Horario</label>
                        <input type="time" name="time" class="form-control" id="">
                    </div>
                    <!-- dias -->
                    <div class="mt-5 text-center">
                        <h4 class="mb-4">Selecciona los dias a tomar el medicamento </h4>    
                    <!-- dias -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dias" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Lunez</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="dias" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Martes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="dias" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Miercoles</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="dias" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">jueves</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="dias" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">viernes </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="dias" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Sabado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="dias" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Vienes</label>
                        </div>
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
