<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Titulados</title>
  <link rel="stylesheet" href="resources/app.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Datos del Estudiante</h2>
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
                    <div class="col-md-3 text-center mt-3 mb-3">
                        <label for="ciInput" class="form-label">CI:</label>
                    </div>
                    <div class="col-md-9 text-center mt-3 mb-3">
                        <input type="text" class="form-control" id="ciInput">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center mt-3 mb-3">
                        <label for="facultyInput" class="form-label">Facultad:</label>
                    </div>
                    <div class="col-md-9 text-center mt-3 mb-3">
                        <input type="text" class="form-control" id="ciInput">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center mt-3 mb-3">
                        <label for="lastNameInput" class="form-label">Paterno:</label>
                    </div>
                    <div class="col-md-9 text-center mt-3 mb-3">
                        <input type="text" class="form-control" id="lastNameInput">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center mt-3 mb-3">
                        <label for="secondLastNameInput" class="form-label">Materno:</label>
                    </div>
                    <div class="col-md-9 text-center mt-3 mb-3">
                        <input type="text" class="form-control" id="secondLastNameInput">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center mt-3 mb-3">
                        <label for="firstNameInput" class="form-label">Nombres:</label>
                    </div>
                    <div class="col-md-9 text-center mt-3 mb-3">
                        <input type="text" class="form-control" id="firstNameInput">
                    </div>
                </div>
                 
                </form>
            </div>
            <div class="col-md-6">
                <h2>Datos de la Defensa</h2>
                <form id="defenseForm">
                    <div class="mb-3">
                        <label for="defenseDateInput" class="form-label">Fecha de Defensa:</label>
                        <input type="date" class="form-control" id="defenseDateInput">
                    </div>
                    <div class="mb-3">
                        <label for="defenseTimeInput" class="form-label">Hora de Defensa:</label>
                        <input type="time" class="form-control" id="defenseTimeInput">
                    </div>
                    <div class="mb-3">
                        <label for="titleInput" class="form-label">Titulo de Tema:</label>
                        <input type="text" class="form-control" id="titleInput">
                    </div>
                    <div class="mb-3">
                        <label for="modalityInput" class="form-label">Modalidad de Graduación:</label>
                        <select class="form-select" id="modalityInput">
                            <option value="Tesis">Tesis</option>
                            <option value="Trabajo de Investigación">Trabajo de Investigación</option>
                            <option value="Proyecto de Grado">Proyecto de Grado</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="academicDegreeInput" class="form-label">Grado Académico:</label>
                        <input type="text" class="form-control" id="academicDegreeInput">
                    </div>
                    <div class="mb-3">
                        <label for="gradeInput" class="form-label">Calificación:</label>
                        <input type="text" class="form-control" id="gradeInput">
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-5">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
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
