<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register adress</title>
    <!--imports-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style> 
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }
        h1, h2, h3, h4, h5 {
            font-weight: 700;
        }
        .card {
            border: 0.2;
            border-radius: 1rem;
            width: 600px;
            height: 100%;
        }
        #card-top-header {
            background-color: black;
            color: white;
            border-top-right-radius: 1rem;
            border-top-left-radius: 1rem;
        }
        .btn-custom {
            background-color: black;
            color: white;
            border: 0;
            font-size: 1.2rem;
            border-radius: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card shadow">
            <div class="card-header text-center shadow" id="card-top-header">
                <h2>Register adress</h2>
            </div>   
            <div class="card-body">
                <form method="POST" action="{{route('saveEditedRegister')}}">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="id" value="{{$adress->id}}">
                        <label for="inputCEP" class="mt-2 form-label">CEP:</label>
                        <input type="number" class="form-control" value="{{$adress->cep}}" id="inputCEP" name="cep">
                        <label for="inputStreet" class="mt-2 form-label">Street:</label>
                        <input type="string" class="form-control" value="{{$adress->street}}" id="inputStreet" name="street">
                        <label for="inputNumber" class="mt-2 form-label">Number:</label>
                        <input type="number" class="form-control" value="{{$adress->number}}" id="inputNumber" name="number">
                        <label for="inputComplement" class="mt-2 form-label">Complement:</label>
                        <input type="string" class="form-control" value="{{$adress->complement}}" id="inputComplement" name="complement">
                        <label for="inputDistrict" class="mt-2 form-label">District:</label>
                        <input type="string" class="form-control" value="{{$adress->district}}" id="inputDistrict" name="district">
                        <label for="inputCity" class="mt-2 form-label">City:</label>
                        <input type="string" class="form-control" value="{{$adress->city}}" id="inputCity" name="city">
                        <label for="inputState" class="mt-2 form-label">State:</label>
                        <input type="string" class="form-control" value="{{$adress->state}}" id="inputState" name="state">
                    </div>
                    <div class="mt-4 row justify-content-center" style="width: 100%; margin: 2px;">
                        <button type="submit" class="fw-bold d-flex text-align-center justify-content-center btn-custom" style="width: 140px; height: 32px;">Save edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>