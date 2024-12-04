<?php
require_once('../../util/core.php');
require_once('../../config/conexion.php');
// Consulta para obtener autores
$sql = "SELECT * FROM preciosrunescape order by id";

$result = $conn->query($sql);

$preciosrunescape = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $preciosrunescape[] = $row;
    }
}

echo json_encode($preciosrunescape);
$conn->close();
?>