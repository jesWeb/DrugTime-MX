@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <h3 class="m-1 font-weight-bold text-primary">Tu medicacion del dia</h3>
        </div>

        <div class="mb-5 mt-5">
            <!-- contenido de medicamentos del dia  -->
            <div class="row">
                <!-- card-1 -->
                <div class="col-4">
                    <div class="card cards-today rounded">
                        hola
                    </div>
                </div>
                <!--card-2  -->
                <div class="col-4">
                    <div class="card cards-today rounded">
                        hola
                    </div>
                </div>
                <!-- card-3-->
                <div class="col-4">
                    <div class="card cards-today rounded">
                        hola
                    </div>
                </div>

            </div>
        </div>
        <!--proximos tratamientos -->
        <div class="mt-4">
            <!--titulo -->
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h3 class="m-1 font-weight-bold text-primary"> tratamientos</h3>
                </div>
                <!-- contenido de medicamentos del dia  -->
                <div class="row">
                    <!-- card-1 -->
                    <div class="col-4">
                        <div class="card cards-today rounded">
                            hola
                        </div>
                    </div>
                    <!--card-2  -->
                    <div class="col-4">
                        <div class="card cards-today rounded">
                            hola
                        </div>
                    </div>
                    <!-- card-3-->
                    <div class="col-4">
                        <div class="card cards-today rounded">
                            hola
                        </div>
                    </div>

                </div>
            </div>

        </div>

</div>
    @include('layouts.footer')
