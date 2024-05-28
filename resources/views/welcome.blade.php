<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Módulo de Secretarías</title>
  @vite(['resources/js/app.js', 'resources/css/app.css'])
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZE9kLz9y3SGIkxgD5u7/F/iLfb7mxFrjIOf21dq+M5g4a/SmF2GfYvC4sq5aYTKU" crossorigin="anonymous">
  
</head>
<body>
<div class="container">
        <h1>Módulo de Secretarías</h1>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <a class="dropdown-item" href="{{ route('mod_secretaria') }}" rel="noopener noreferrer">
                    <i class="fas fa-file-alt"></i>Titulos
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <a class="dropdown-item" href="{{ route('datos_acta') }}" rel="noopener noreferrer">
                    <i class="fas fa-file-alt"></i>Datos del Acta
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                
                <a class="dropdown-item" href="{{ route('report') }}" rel="noopener noreferrer">
                    <i class="fas fa-file-alt"></i>Reportes
                </a>
            </div>
        </div>
    </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-j9SN6wk6QxhJTz+s3XfMvAPFftAJylhvo0CYY5Vn3mGDb2NzE+1Pup5n+RTmX5U+" crossorigin="anonymous"></script>

</body>
</html>
