<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid</title>
</head>
<body>
    <h1>Covid Data</h1>
    <div class="container">
        <div class="col-xs-12">
            <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">regione</th>
                    <th scope="col">positivi</th>
                    <th scope="col">TI</th>
                    <th scope="col">ospedalizzati</th>
                    </tr>
                </thead>
                @foreach ($covids as $covid)
                <tbody>
                    <tr>
                    <td> {{ $covid->regione}} </td>
                    <td> {{ $covid->positivi}} </td>
                    <td> {{ $covid->TI}} </td>
                    <td> {{ $covid->ospedalizati }} </td>
                    </tr>
                </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div>  
</body>
</html>