@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<div class="container">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <div class="row">
        <div class="col-auto">
            <!-- graficas -->
            <canvas id="doughnut-chart" width="800" height="450"></canvas>
            <!-- script -->

            <!-- <script>
                new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: [
        @foreach()
      ],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
            </script> -->



        </div>
    </div>











</div>



@include('layouts.footer')
