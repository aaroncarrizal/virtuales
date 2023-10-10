<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];
    $matricula = $_POST['matricula'];
    $fecha_cap = $_POST['fecha_cap'];
    $fecha_nac = $_POST['fecha_nac'];
    $lugar_nac = $_POST['lugar_nac'];
    $lugar_proc = $_POST['lugar_proc'];
    $ecivil = $_POST['ecivil'];
    $domicilio = $_POST['domicilio'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO datos (nombre, edad, sexo, carrera, semestre, matricula, fecha_cap, fecha_nac, lugar_nac, lugar_proc, ecivil, domicilio, email, tel) VALUES ('$nombre', $edad, $sexo, $carrera, $semestre, $matricula, '$fecha_cap', '$fecha_nac', '$lugar_nac', '$lugar_proc', $ecivil, '$domicilio', '$email', '$tel')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Formulario de Datos</h2>
        <div class="row m-3">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required><br>

                <label for="edad" class="form-label">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control" required><br>

                <label for="sexo" class="form-label">Sexo:</label>
                <select class="form-select" aria-label="Default select example" name="sexo">
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                </select>

                <label for="carrera" class="form-label">Carrera:</label>
                <select class="form-select" aria-label="Default select example" name="carrera">
                    <option value="1">ITI</option>
                    <option value="2">ITEM</option>
                    <option value="3">ISTI</option>
                    <option value="4">ITMA</option>
                    <option value="5">LMKI</option>
                    <option value="6">LAG</option>
                </select>

                <label for="semestre" class="form-label">Semestre:</label>
                <select class="form-select" aria-label="Default select example" name="semestre">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>

                <label for="matricula" class="form-label">Matrícula:</label>
                <input type="number" name="matricula" id="matricula" class="form-control" required><br>

                <label for="fecha_cap" class="form-label">Fecha de Captura:</label>
                <input type="date" name="fecha_cap" id="fecha_cap" class="form-control" required><br>

                <label for="fecha_nac" class="form-label">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nac" id="fecha_nac" class="form-control" required><br>

                <label for="lugar_nac" class="form-label">Lugar de Nacimiento:</label>
                <input type="text" name="lugar_nac" id="lugar_nac" class="form-control" required><br>

                <label for="lugar_proc" class="form-label">Lugar de Procedencia:</label>
                <input type="text" name="lugar_proc" id="lugar_proc" class="form-control" required><br>

                <label for="ecivil" class="form-label">Estado Civil:</label>
                <select class="form-select" aria-label="Default select example" name="ecivil">
                    <option value="1">Soltero</option>
                    <option value="2">Casado</option>
                    <option value="3">Viudo</option>
                    <option value="4">Otro</option>
                </select>

                <label for="domicilio" class="form-label">Domicilio:</label>
                <input type="text" name="domicilio" id="domicilio" class="form-control" required><br>

                <label for="email" class="form-label">Correo Electrónico:</label>
                <input type="email" name="email" id="email" class="form-control" required><br>

                <label for="tel" class="form-label">Teléfono:</label>
                <input type="tel" name="tel" id="tel" class="form-control" required><br>

                <div class="d-grid gap-2">
                    <button type="submit" value="Guardar" class="btn btn-primary">Guardar</button>
                </div>
            </form>


        </div>
    </div>
</body>

</html>