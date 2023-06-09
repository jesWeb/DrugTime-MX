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
                <form action="{{route('tratamiento.store')}}" ectype="multipart/form-data" method="post">
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
                    <div class="mb-4" <label for="time" class="form-label">Horario</label>
                        <input type="time" name="horario" class="form-control" id="t">
                    </div>
                    <!-- dias -->
                    <div class="mt-5  text-center">
                        <!-- dias -->
                        <div class="form-check form-check-inline">
                            {{-- check lunes --}}
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dias"
                                value="lunes">
                            <label class="form-check-label" for="inlineCheckbox1">Lunes</label>
                            {{-- check martes --}}
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="dias"
                                value="martes">
                            <label class="form-check-label" for="inlineCheckbox2">Martes</label>
                            {{-- miercoles --}}
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="dias"
                                value="miercoles">
                            <label class="form-check-label" for="inlineCheckbox3">Miercoles</label>
                            {{-- jueves --}}
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="dias"
                                value="jueves">
                            <label class="form-check-label" for="inlineCheckbox4">Jueves</label>
                            {{-- viernes --}}
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="dias"
                                value="viernes">
                            <label class="form-check-label" for="inlineCheckbox5">Viernes</label>
                            {{-- sabado --}}
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" name="dias"
                                value="sabado">
                            <label class="form-check-label" for="inlineCheckbox6">Sabados</label>
                            {{-- domingo --}}
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" name="dias"
                                value="domingo">
                            <label class="form-check-label" for="inlineCheckbox7">Domingo</label>
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
