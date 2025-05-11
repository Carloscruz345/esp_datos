<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que los parámetros 'sensor1' y 'sensor2' estén presentes
    if (isset($_POST['sensor1']) && isset($_POST['sensor2'])) {
        $sensor1 = $_POST['sensor1'];
        $sensor2 = $_POST['sensor2'];

        // Aquí puedes hacer lo que necesites con los datos: guardarlos en una base de datos, archivo, etc.
        // Ejemplo de impresión para verificar la recepción:
        echo "Datos recibidos: Sensor 1 = $sensor1, Sensor 2 = $sensor2";

        // Si todo está bien, responder con un mensaje de éxito
        http_response_code(200);  // Código de respuesta HTTP 200 (OK)
    } else {
        // Si los parámetros no están presentes, mostrar un error
        echo "Error: Parámetros faltantes.";
        http_response_code(400);  // Código de respuesta HTTP 400 (Bad Request)
    }
} else {
    echo "Esta página espera peticiones POST con los parámetros 'sensor1' y 'sensor2'.";
    http_response_code(405);  // Método no permitido si no es POST
}
?>

