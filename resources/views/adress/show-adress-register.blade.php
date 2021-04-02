<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show register</title>
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
        <h1>Show adresses</h1>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">CEP</th>
                <th scope="col">Street</th>
                <th scope="col">Number</th>
                <th scope="col">Complement</th>
                <th scope="col">District</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($adresses as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->cep}}</td>
                  <td>{{$item->street}}</td>
                  <td>{{$item->number}}</td>
                  <td>{{$item->complement}}</td>
                  <td>{{$item->district}}</td>
                  <td>{{$item->city}}</td>
                  <td>{{$item->state}}</td>
                  <td>
                    <a class="text-decoration-none" href="{{ route('editAdressRegister', $item->id ) }}">Editar</a>
                    <br>
                    <a class="text-decoration-none" href="{{ route('deleteAdressRegister', $item->id ) }}">Excluir</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>