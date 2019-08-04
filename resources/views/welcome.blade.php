<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PMD Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background: url('{{asset("resources/img/web_bg.png")}}');
            color: #ffffff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div align="center">
                    <img src="{{asset('resources/img/bat_logo_white.png')}}" width="250px" style="margin: 15px;" />
                    <h3><b>PMD</b></h3>
                    <h4><b>Lamina Conditioning</b></h4>
                    <table class="table table-bordered" style="background: white">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Blend</th>
                                <th scope="col">Operation Number</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $info)
                            <tr>
                                <td>{{$info->date}}</td>
                                <td>{{$info->blend}}</td>
                                <td>{{$info->operation}}</td>
                                @if($info->status == 'GREEN')
                                <td><button type="button" class="btn btn-success btn-lg btn-block"><font color="success">.</font></button></td>
                                @elseif($info->status == 'YELLOW')
                                <td><button type="button" class="btn btn-warning btn-lg btn-block"><font color="warning">.</font></button></td>
                                @else
                                <td><button type="button" class="btn btn-danger btn-lg btn-block"><font color="danger">.</font></button></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>