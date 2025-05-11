<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica si los parámetros están presentes en la petición POST
    if (isset($_POST['sensor1']) && isset($_POST['sensor2'])) {
        $sensor1 = $_POST['sensor1'];
        $sensor2 = $_POST['sensor2'];

        // Mostrar los datos de los sensores en la página
        echo "<h2>Datos recibidos:</h2>";
        echo "<p>Sensor 1: " . $sensor1 . " °C</p>";
        echo "<p>Sensor 2: " . $sensor2 . " °C</p>";
        
        // Aquí puedes agregar código para guardar los datos en una base de datos si lo deseas
    } else {
        echo "Faltan los parámetros 'sensor1' y 'sensor2'.";
    }
} else {
    echo "Esta página espera peticiones POST con los parámetros 'sensor1' y 'sensor2'.";
}
?>


