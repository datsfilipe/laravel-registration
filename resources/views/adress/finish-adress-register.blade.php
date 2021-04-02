<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finished register</title>
    <!-- Imports -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style> 
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }
        h1 {
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Successful registration</h1>
        </div>
        <div class="row">
            <div class="col-md-2">
                Cep:
            </div>
            <div class="col-md-10">
                {{$adress->cep}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                Street:
            </div>
            <div class="col-md-10">
                {{$adress->street}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                Number:
            </div>
            <div class="col-md-10">
                {{$adress->number}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                Complement:
            </div>
            <div class="col-md-10">
                {{$adress->complement}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                District:
            </div>
            <div class="col-md-10">
                {{$adress->district}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                City:
            </div>
            <div class="col-md-10">
                {{$adress->city}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                State:
            </div>
            <div class="col-md-10">
                {{$adress->state}}
            </div>
        </div>
    </div>
</body>
</html>