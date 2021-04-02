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
        <h1>Show users</h1>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Password</th>
                <th scope="col">Matriculation number</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->name}}</td>
                  <td>{{$item->date}}</td>
                  <td>{{$item->password}}</td>
                  <td>{{$item->matriculation_id}}</td>
                  <td>
                    <a class="text-decoration-none" href="{{ route('editUserRegister', $item->id ) }}">Editar</a>
                    <br>
                    <a class="text-decoration-none" href="{{ route('deleteUserRegister', $item->id ) }}">Excluir</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>