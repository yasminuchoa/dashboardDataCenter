@extends('layouts.logado')

@section('content')


<div class="row">

    <div class="col-lg-4">

        <div class="card card-chart">

            <div class="card-header">

                <h5 class="card-category">Nível temperatura:</h5>

                <h4 class="card-title">Temperatura Média</h4>

                <div class="dropdown">

                    <div class="dropdown-menu dropdown-menu-right">

                        <a class="dropdown-item" href="#">Action</a>

                        <a class="dropdown-item" href="#">Another action</a>

                        <a class="dropdown-item" href="#">Something else here</a>

                        <a class="dropdown-item text-danger" href="#">Remove Data</a>

                    </div>

                </div>

            </div>

            <div class="card-body">

                <div class="chart-area">

                    <canvas id="lineChartExample"></canvas>

                </div>

            </div>

            <div class="card-footer">

                <div class="stats">

                    <i class="now-ui-icons arrows-1_refresh-69"></i> Atualizar

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-4 col-md-6">

        <div class="card card-chart">

            <div class="card-header">

                <h5 class="card-category">Nível umidade:</h5>

                <h4 class="card-title">Umidade média</h4>

                <div class="dropdown">


                    <div class="dropdown-menu dropdown-menu-right">

                        <a class="dropdown-item" href="#">Action</a>

                        <a class="dropdown-item" href="#">Another action</a>

                        <a class="dropdown-item" href="#">Something else here</a>

                        <a class="dropdown-item text-danger" href="#">Remove Data</a>

                    </div>

                </div>

            </div>

            <div class="card-body">

                <div class="chart-area">

                    <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>

                </div>

            </div>

            <div class="card-footer">

                <div class="stats">

                    <i class="now-ui-icons arrows-1_refresh-69"></i> Atualizar                
                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-4 col-md-6">

        <div class="card card-chart">

            <div class="card-header">

                <h5 class="card-category">Performace Raspberry</h5>

                <h4 class="card-title">24 horas Performance</h4>

            </div>

            <div class="card-body">

                <div class="chart-area">

                    <canvas id="barChartSimpleGradientsNumbers"></canvas>

                </div>

            </div>

            <div class="card-footer">

                <div class="stats">

                    <i class="now-ui-icons ui-2_time-alarm"></i> Últimos 7 dias
                </div>

            </div>

        </div>

    </div>

</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
