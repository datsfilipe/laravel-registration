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
        <h1>Show register</h1>
        <div class="mb-3">
            Name: {{$name}} <br>
            Date of birth: {{$date}} <br>
            Password: {{$password}} <br>
            Matriculation id: {{$id}}
        </div>
    </div>
</body>
</html>