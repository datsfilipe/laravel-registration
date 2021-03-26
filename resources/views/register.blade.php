<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
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
        <h1>Register</h1>
        <form method="POST" action="{{route('finishRegister')}}">
            @csrf
            <div class="mb-3">
                <label for="inputName" class="form-label">Name:</label>
                <input type="text" class="form-control" id="inputName" name="name">
              </div>
            <div class="mb-3">
              <label for="inputDate" class="form-label">Date of birth:</label>
              <input type="date" class="form-control" id="inputDate" name="date">
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password:</label>
              <input type="password" class="form-control" id="inputPassword" name="password">
            </div>
            <div class="mb-3">
                <label for="inputMatriculationNumber" class="form-label">Matriculation id:</label>
                <input type="number" class="form-control" id="inputMatriculationNumber" name="id">
              </div>
            <button type="submit" class="btn btn-primary btn-dark">Finish register</button>
          </form>
    </div>
</body>
</html>