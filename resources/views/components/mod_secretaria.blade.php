<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Titulados</title>
  <link rel="stylesheet" href="resources/app.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  @vite(['resources/js/app.js', 'resources/sass/rout.css'])
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <h2>TITULOS</h2>
                <form id="studentForm">
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <label for="ciInput" class="form-label">RU:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="ciInput">
                        </div>
                    </div>

                <div class="row">
                    <div class="col-md-12 text-center mt-3 mb-5">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="academicCertifiateInput" class="form-label">Grado Académico:</label>
                        <input type="text" class="form-control" id="academicCertifiateInput">
                    </div>
                    <div class="mb-3">
                        <label for="nationalProvisionInput" class="form-label">Grado Académico:</label>
                        <input type="text" class="form-control" id="nationalProvisionInput">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    // JavaScript para manejar la acción de búsqueda
    document.getElementById("studentForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Evitar el comportamiento por defecto del formulario
        // Obtener el valor del campo de CI
        var ci = document.getElementById("ciInput").value;
        // Aquí puedes agregar tu lógica para buscar el estudiante en la base de datos y llenar los campos correspondientes
        console.log("Búsqueda del estudiante con CI: " + ci);
    });

    // JavaScript para manejar la acción de guardar los datos de la defensa
    document.getElementById("defenseForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Evitar el comportamiento por defecto del formulario
        // Obtener los valores de los campos de la defensa
        var defenseDate = document.getElementById("defenseDateInput").value;
        var defenseTime = document.getElementById("defenseTimeInput").value;
        var title = document.getElementById("titleInput").value;
        var modality = document.getElementById("modalityInput").value;
        var academicDegree = document.getElementById("academicDegreeInput").value;
        var grade = document.getElementById("gradeInput").value;
        // Aquí puedes agregar tu lógica para guardar estos datos en la base de datos
        console.log("Datos de la defensa guardados:");
        console.log("Fecha de Defensa: " + defenseDate);
        console.log("Hora de Defensa: " + defenseTime);
        console.log("Titulo de Tema: " + title);
        console.log("Modalidad de Graduación: " + modality);
        console.log("Grado Académico: " + academicDegree);
        console.log("Calificación: " + grade);
    });
    </script>

</body>
</html>
