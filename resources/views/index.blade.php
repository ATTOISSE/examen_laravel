@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card cadre mt-3">
        <div class="card-header text-center bg-bg-secondary">
            <h2>Tableau de bord</h2>
        </div>
        <div class="card-body">
            <div class="row mx-0">
                <div class=" mx-2 p1" style="width:24%;">
                    <p class="text-center ">Candidat/Formation</p>
                    <div id="plus" hidden>
                        <?php for ($i = 0; $i < count($nombre_formation); $i++) { ?>
                        <div class="row">
                            <h5 class=" offset-3 ">{{$nombre_formation[$i] }}</h5>
                            <h5 class=" mx-3">{{$nom_formation[$i]}}</h5>
                        </div>
                        <?php } ?>
                    </div>
                    <div id="moins">
                        <?php for ($i = 0; $i < 1; $i++) { ?>
                        <div class="row">
                            <h5 class="offset-3 ">{{$nombre_formation[$i] }}</h5>
                            <h5 class="mx-3">{{$nom_formation[$i]}}</h5>
                        </div>
                        <?php } ?>
                    </div>
                    <button id="btn_pagination" class="btn btn-outline-secondary mb-1">Plus</button>
                </div>

                <div class=" p2" style="width: 24%;">
                    <p class="text-center">Candidat/Sexe</p>
                    <div class="row">
                        <h5 class="offset-3">{{$nombre_homme}}</h5>
                        <h5 class="mx-3">Homme</h5>
                    </div>
                    <div class="row">
                        <h5 class="offset-3">{{$nombre_femme}}</h5>
                        <h5 class="mx-3">Femme</h5>
                    </div>
                </div>

                <div class="mx-2 p3" style="width: 24%;">
                    <p class="text-center">Formation/Réferentiel</p>
                    <?php for ($i = 0; $i < count($nombre_referentiel); $i++) { ?> <div class="row">
                        <h5 class="offset-3">{{$nombre_referentiel[$i] }} </h5>
                        <h5 class="mx-3">{{$nom_referentiel[$i]}}</h5>
                    </div>
                    <?php } ?>
                </div>

                <div class="p4" style="width: 24%;">
                    <p class="text-center">Formation/type</p>
                    <?php for ($i = 0; $i < count($nombre_type); $i++) { ?>
                    <div class="row">
                        <h5 class="offset-3">{{$nombre_type[$i] }} </h5>
                        <h5 class="mx-3">{{$nom_type[$i]}}</h5>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="border border-2 mx-5" style="width: 40%;">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        <?= $chaine_age ?>
                    ]);

                    var options = {
                        title: 'Repartition par Age'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
                </script>

                <body>
                    <div id="piechart" style="width: 450px; height: 200px;font-family: Georgia;"></div>
                </body>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://code.highcharts.com/highcharts.com/highcharts.js"></script>
                <script src="https://cdnjs.com/libraries/Chart.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
            </div>

            <div class="graphe" style="width: 48%;">
                <!-- Show Graph Data -->
                <script src="https://cdnjs.com/libraries/Chart.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

                <div class="map_canvas">

                    <canvas id="myChart" width="300" height="100"></canvas>
                </div>
                <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode($nom) ?>,
                        datasets: [{
                            label: 'Repartition par formation(2: en cours et 1: en attente)',
                            data: <?php echo json_encode($chaine_nom); ?>,
                            backgroundColor: [
                                'rgba(31, 58, 147, 1)',
                                'rgba(37, 116, 169, 1)',
                                'rgba(92, 151, 191, 1)',
                                'rgb(200, 247, 197)',
                                'rgb(77, 175, 124)',
                                'rgb(30, 130, 76)'
                            ],
                            borderColor: [
                                'rgba(31, 58, 147, 1)',
                                'rgba(37, 116, 169, 1)',
                                'rgba(92, 151, 191, 1)',
                                'rgb(200, 247, 197)',
                                'rgb(77, 175, 124)',
                                'rgb(30, 130, 76)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                max: 5,
                                min: 0,
                                ticks: {
                                    stepSize: 1
                                }
                            }
                        },
                        plugins: {
                            title: {
                                display: false,
                                text: 'Custom Chart Title'
                            },
                            legend: {
                                display: true,
                            }
                        }
                    }
                });
                </script>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/script.js')}}"></script>
@endsection