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
</head>
<body>
    <h2>Formulario de Datos</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required><br>

        <label for="sexo">Sexo:</label>
        <input type="number" name="sexo" id="sexo" required><br>

        <label for="carrera">Carrera:</label>
        <input type="number" name="carrera" id="carrera" required><br>

        <label for="semestre">Semestre:</label>
        <input type="number" name="semestre" id="semestre" required><br>

        <label for="matricula">Matrícula:</label>
        <input type="number" name="matricula" id="matricula" required><br>

        <label for="fecha_cap">Fecha de Captura:</label>
        <input type="date" name="fecha_cap" id="fecha_cap" required><br>

        <label for="fecha_nac">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nac" id="fecha_nac" required><br>

        <label for="lugar_nac">Lugar de Nacimiento:</label>
        <input type="text" name="lugar_nac" id="lugar_nac" required><br>

        <label for="lugar_proc">Lugar de Procedencia:</label>
        <input type="text" name="lugar_proc" id="lugar_proc" required><br>

        <label for="ecivil">Estado Civil:</label>
        <input type="number" name="ecivil" id="ecivil" required><br>

        <label for="domicilio">Domicilio:</label>
        <input type="text" name="domicilio" id="domicilio" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="tel">Teléfono:</label>
        <input type="tel" name="tel" id="tel" required><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
