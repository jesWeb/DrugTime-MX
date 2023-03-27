<!DOCTYPE html>
<html lang="es-Mx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Registro</title>
</head>

<body>
    <div class="container">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 m-3 text-gray-800">Crear Una cuenta</h1>
        </div>
        <!-- form area -->
        <div class="row">
            <div class="col-6">
                <img src="{{asset('img/register/registro.jpg')}}" class="img-registro card-img-top" alt="">
            </div>


            <div class=" col-6 shadow card-body mt-5">
                <form action="{{route('registro.store')}}" ectype="multipart/form-data" method="POST">
                    {{csrf_field()}}
                    <!-- email -->
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email" require placeholder="@gmail" id="">
                    </div>

                    <!-- password -->
                    <div class="mb-4">
                        <label for="password" class="form-label">contraseña</label>
                        <input type="password" class="form-control" name="password" require id="" placeholder="***">
                    </div>

                   <!-- btn registro -->
                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                    <button class="btn btn-success m-3" type="submit"  value="save">Registrate</button>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>
