@include('layouts.header')

@include('layouts.menu')


@section('header')
@endsection


<div class="container">
    <h1>completa tu informacion</h1>
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center;">Configuracion Personal</h1>
            <form class="row g-3"
                style="
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    text-align: center;
                "
                enctype="multipart/form-data" id="formulario-settings">
                <input type="file" name="imagen" class="form-control" id="exampleInputPassword1">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputEmail4" value="" name="nombre">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="inputPassword4" value="" name="apellidos">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputEmail4" value="" name="email">
                </div>
                <div class="col-md-3">
                    <label for="inputPassword4" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="inputPassword4" value="" name="telefono">
                </div>
                <div class="col-md-3">
                    <label for="inputPassword4" class="form-label">Codigo Postal</label>
                    <input type="text" class="form-control" id="inputPassword4" value="" name="cp">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="inputCity" value="" name="calle">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Num. Interior</label>
                    <input type="text" class="form-control" id="inputZip" value="" name="numInt">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Num. Exterior</label>
                    <input type="text" class="form-control" id="inputZip" value="" name="numExt">
                </div>
            </form>
        </div>
    </div>

</div>
