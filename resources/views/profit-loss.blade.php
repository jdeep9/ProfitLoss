<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            th {
                padding: 15px;
            }
            td {
                padding: 15px;
            }
        </style>
    </head>
<body>
    <section style="padding-top:60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <table border="1" cellpadding="0" cellspacing="">
                        <thead>
                            <tr colspan="10">
                                <th rowspan="2">Month/Year</th>
                                <th style="padding: 0px;">
                                    <table border="1">
                                        <thead>
                                            <tr>
                                                <th colspan="3">Buy</th>
                                            </tr>
                                            <tr>
                                                <th>Qty</th>
                                                <th>Rate</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </th>
                                <th style="padding: 0px !important;">
                                    <table border="1">
                                        <thead>
                                            <tr>
                                                <th colspan="3">Sell</th>
                                            </tr>
                                            <tr>
                                                <th>Qty</th>
                                                <th>Rate</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </th>
                                <th rowspan="2">Remain Stock</th>
                                <th rowspan="2">Profit/Loss</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>
                                @foreach ($year as $k => $v)
                                    <table border="1">
                                        <tr>
                                            <td>{{$v}}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($buy as $k1 => $v1)
                                    <table border="1">
                                        <tr>
                                            <td>{{$v1->Qty}}</td>
                                            <td>{{$v1->Rate}}</td>
                                            <td>{{$v1->Total}}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($sell as $k2 => $v2)
                                    <table border="1">
                                        <tr>
                                            <td>{{$v2->Qty}}</td>
                                            <td>{{$v2->Rate}}</td>
                                            <td>{{$v2->Total}}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($stock as $k3 => $v3)
                                    <table border="1">
                                        <tr>
                                            <td>{{$v3}}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($proloss as $k4 => $v4)
                                    <table border="1">
                                        <tr>
                                            <td>{{$v4}}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
