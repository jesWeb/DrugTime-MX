@include('layouts.header')

@include('layouts.menu')


@section('header')
@endsection




<div class="container">

    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center;">Configuracion Personal</h1>
            @error('success')
                <script>
                    Swal.fire(
                        'Success',
                        '{{ $message}}',
                        'success'
                    )
                </script>

            @enderror
            <form class="row g-3"
                style="
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    text-align: center;
                                "
                enctype="multipart/form-data" id="formulario-settings" method="post"
                action="{{ route('saveSettingsC') }}">
                @csrf


                <div class="col-md-6">
                    <label for="text" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="text" value="" name="nombre">
                    @error('nombre')
                        <div id="validationServer03Feedback" class="" style="color: red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="col-md-3">
                    <label for="date" class="form-label">fecha de Nacimiento</label>
                    <input type="date" name="fechaN" class="form-control" require id="">
                    @error('fechaN')
                        <div id="validationServer03Feedback" class="" style="color: red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="sexo">Sexo</label>
                    <div class="form-group">
                        <select class="form-control" name="sexo" require id="">
                            <option value=""></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    @error('sexo')
                        <div id="validationServer03Feedback" class="" style="color: red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">peso</label>
                    <input type="number" class="form-control" id="inputCity" value="" name="peso">
                    @error('peso')
                        <div id="validationServer03Feedback" class="" style="color: red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="alergias">Alergias</label>
                    <div class="form-group">
                        <select class="form-control" name="alergias" require id="">
                            <option value=""></option>
                            <option value="si">si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    @error('peso')
                        <div id="validationServer03Feedback" class="" style="color: red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="tel" class="form-label">Telefono</label>
                    <input type="tel" name="Telefono" class="form-control" placeholder="+52" id="">
                    @error('Telefono')
                        <div id="validationServer03Feedback" class="" style="color: red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- enfermedades --}}

                <div class="col-md-8 mt-4">
                    <label for="">¿Enfermedades?</label>
                    <input type="text" class="form-control" name="enfermedades" id="descripcion">
                    @error('enfermedades')
                        <div id="validationServer03Feedback" class="" style="color: red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-8 mt-4">
                    <input type="file" name="imagenU" class="form-control" id="exampleInputPassword1">
                    {{-- @error('imagenU')
                        <div id="validationServer03Feedback" class="" style="color: red">
                            {{ $message }}
                        </div> --}}
                    {{-- @enderror --}}
                </div>

                <!-- btn registro -->
                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                    <input type="submit" value="Guardar" class="btn btn-outline-primary">
                </div>
        </div>
        </form>
    </div>
</div>

</div>
</form>
</div>
</div>

</div>
@include('layouts.footer')
