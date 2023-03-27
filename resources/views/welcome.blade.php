<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrugTime</title>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>

<header>
    <nav class="navbar d-flex justify-content-center navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item border-bottom">
                        <a class="nav-link active" aria-current="page" href="#">inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DrugSlide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">
                            iniciar sesion / Registrate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>
    <div class="container">
        <!--PROMO-slider-->
        <div class="row mt-3 mb-3">
            <!--PROMO--->
            <div class="col-4">
                <div class="">
                    <h3>titulo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore voluptatem quas harum expedita
                        esse, ipsum necessitatibus molestiae officia vero perspiciatis maxime delectus blanditiis
                        nostrum modi.</p>
                </div>
            </div>

            <div class="col8">
                <img src="https://picsum.photos/200/300.jpg" alt="">
            </div>
        </div>
        <!--about us--->
        <section class="mb-4 bg-primary">
            <div class="row justify-content-center">
                <!--PROMO--->
                <div class="col-4">
                    <div class="card">
                        <h4>titulo</h4>
                    </div>
                </div>
                <!--PROMO--->
                <div class="col-4">
                    <div class="card">
                        <h4>titulo</h4>
                    </div>
                </div>
                <!--PROMO--->
                <div class="col-4">
                    <div class="card">
                        <h4>titulo</h4>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="">
                    <h3>¿Quienes somos?</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, ipsa nihil architecto, impedit
                        maxime voluptatem quos provident ad molestiae alias eligendi iusto harum? Obcaecati unde vel hic
                        iste itaque veritatis.</p>
                    <div class="row">
                        <div class="col-6">
                            <h4 class="mt-3 text-center">titulo</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, accusamus.</p>
                        </div>
                        <div class="col-6">
                            <h4 class="mt-3 text-center">titulo</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, accusamus.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--drugslide-->
        <section class="mt-4" id="">
            <div class="row align-items-center bg-danger">
                <!--PROMO--->
                <div class="col-6">
                    <div class="d-flex justify-content-center">
                        <div class="promo-img">
                            <img src="https://picsum.photos/200/300.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!--PROMO--->
                <div class="col-6">
                    <div class=" text-center   ">
                        <h4>Adquiere tu Drugslide </h4>
                        <p>Tomar ahora tus medicamentos sera muy futurista </p>
                        <a href="" class="btn btn-primary">Comprar ahora </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

<footer class="container">
    <h1>hola</h1>
</footer>


</html>
