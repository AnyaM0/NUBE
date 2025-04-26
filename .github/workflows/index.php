<?php
// Variables de conexión a la base de datos (ajustar con tus credenciales)
$host = 'mysql2.database.azure.com';  // Cambia por la IP privada o nombre interno del servidor
$user = 'anacuc@mysql2';  // Tu usuario MySQL (formato usuario@servidor)
$password = '1044612390Anna_';  // Tu contraseña de la base de datos
$dbname = 'mysql2';  // Nombre de la base de datos

// Crear la conexión
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("<div class='error'>Error de conexión: " . mysqli_connect_error() . "</div>");
} else {
    echo "<div class='success'>Conexión exitosa a la base de datos MySQL</div>";
}

// Realizar una consulta para verificar la conexión
$query = "SELECT DATABASE()";
$result = mysqli_query($conn, $query);
if ($result) {
    $row = mysqli_fetch_row($result);
    echo "<div class='info'>Base de datos actual: " . $row[0] . "</div>";
} else {
    echo "<div class='error'>No se pudo obtener la base de datos actual: " . mysqli_error($conn) . "</div>";
}

// Cerrar la conexión
mysqli_close($conn);
?>
