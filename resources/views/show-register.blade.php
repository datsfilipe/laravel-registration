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
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Matriculation id</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Filipe Lima</td>
                <td>16/05/2002</td>
                <td>222333111</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Pedro Lucas</td>
                <td>20/06/2003</td>
                <td>645888222</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Luca Borela</td>
                <td>02/08/2003</td>
                <td>777222134</td>
              </tr>
            </tbody>
          </table>
    </div>
</body>
</html>