<?php
echo "<h1>Conexión a PostgreSQL desde PHP</h1>";

$host = "192.168.56.11"; // IP de la máquina DB
$dbname = "tallerdb";
$user = "postgres";
$password = ""; 

$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "<p><b>Error al conectar con la base de datos.</b></p>";
    exit;
}

$result = pg_query($conn, "SELECT * FROM alumnos");

if (!$result) {
    echo "<p>Error al ejecutar la consulta.</p>";
    exit;
}

echo "<h2>Lista de alumnos</h2>";
echo "<ul>";
while ($row = pg_fetch_assoc($result)) {
    echo "<li>" . htmlspecialchars($row['nombre']) . "</li>";
}
echo "</ul>";

pg_close($conn);
?>
