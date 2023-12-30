@extends('layouts.admin');


@section('content')
    <h4 class="mb-3 mb-md-0">Welcome to Dashboard <strong class="text-success">{{ Auth::user()->name }}</strong>
    </h4>

    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Last 15 Days Order</h3>
                </div>
                <div class="card-body">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Last 15 Days Sales Amount</h3>
                </div>
                <div class="card-body">
                    <div>
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection







@section('footer_script')
    <script>
        const ctx = document.getElementById('myChart');

        var order_date = {{ Js::from($order_date_info) }};
        var total_order = {{ Js::from($total_order_info) }};

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: order_date,
                datasets: [{
                    label: 'Total Orders in Number',
                    data: total_order,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


    <script>
        const sales = document.getElementById('myChart2');

        var sales_date = {{ Js::from($sales_date_info) }};
        var total_sales = {{ Js::from($total_sales_info) }};

        new Chart(sales, {
            type: 'bar',
            data: {
                labels: sales_date,
                datasets: [{
                    label: 'Total Sales in Taka;', // for taka
                    // label: 'Total Sales in %', // for percentage
                    data: total_sales,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
