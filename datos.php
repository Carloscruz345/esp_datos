<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['sensor1'])) {
        $temp = $_POST['sensor1'];
        echo "OK: Temperatura recibida: " . $temp;
    } else {
        echo "Error: Parámetro 'sensor1' no encontrado.";
    }
} else {
    echo "Esta página espera peticiones POST con el parámetro 'sensor1'.";
}
?>
