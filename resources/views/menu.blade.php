<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
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
        a, a:hover, a:active {
            color: white;
            text-decoration: none;
        }
        .container {
            width: 100vw;
            height: 100vh;
        }
        .card {
            border: 0.2;
            border-radius: 1rem;
            width: 600px;
            height: 320px;
        }
        .btn-custom {
            background-color: black;
            border: 0;
            height: 90px;
            font-size: 1rem;
            border-radius: 0.5rem;
            padding: 9px;
        }
        #card-top-header {
            background-color: #19191A;
            color: white;
            border-top-right-radius: 1rem;
            border-top-left-radius: 1rem;
        }
        .row {
            --bs-gutter-x: 0!important;
            height: 40px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card text-center shadow">
            <div class="card-header shadow" id="card-top-header">
                <h2 class="fw-bold">Choose an option</h2>
            </div>
            <div class="mt-3 card-body flex-direction-column align-items-center">
                <!--Options for user-->
                <div class="row d-block align-items-center col mb-3" style="margin-left: 5px; margin-right: 5px;">
                    <a class="btn-custom shadow" href="{{route('userRegister')}}">Register user</a>
                </div>
                <div class="row d-block align-items-center col mb-3" style="margin-left: 5px; margin-right: 5px;">
                    <a class="btn-custom shadow" href="{{route('showUserRegister')}}">Display users</a>
                </div>
                <!--Options for adress-->
                <div class="row d-block align-items-center col mb-3" style="margin-left: 5px; margin-right: 5px;">
                    <a href="{{route('adressRegister')}}" class="btn-custom">Register adress</a>
                </div>
                <div class="row d-block align-items-center col mb-3" style="margin-left: 5px; margin-right: 5px;">
                    <a href="{{route('showAdressRegister')}}" class="btn-custom">Display adresses</a>
                </div>
                <div class="row d-block align-items-center col mb-3" style="margin-left: 5px; margin-right: 5px;">
                    <a href="{{route('register')}}" class="btn-custom">Register user/adress</a>
                </div>
                <div class="row d-block align-items-center col mb-3" style="margin-left: 5px; margin-right: 5px;">
                    <a href="{{route('showRegister')}}" class="btn-custom">Display users/adresses</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>