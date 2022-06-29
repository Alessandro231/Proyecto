<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Tipo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Habilidad</th>
                <th scope="col">Debilidad</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($reporte as $reporte)
                 <tr>
                    <th scope="row">{{ $reporte->id }}</th>
                    <td>{{ $reporte->nombre }}</td>
                    <td>{{ $reporte->imagen }}</td>
                    <td>{{ $reporte->tipo }}</td>
                    <td>{{ $reporte->categoria }}</td>
                    <td>{{ $reporte->habilidad }}</td>
                    <td>{{ $reporte->debilidad }}</td>

              </tr>
              @endforeach
            </tbody>

          </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
