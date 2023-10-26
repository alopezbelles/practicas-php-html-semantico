
<?php
include('conexion.php');

// Consulta para obtener registros de la tabla SALESPEOPLE
$query = "SELECT * FROM SALESPEOPLE";

// Ejecutar la consulta
$result = mysqli_query($con, $query);

// Verificar si la consulta se realizó con éxito
if ($result) {
    // Recorrer los resultados y mostrar los datos
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['SalespeopleId'] . "<br>";
        echo "Nombre: " . $row['SalespeopleName'] . "<br>";
        echo "Asignaciones: " . $row['SalespeopleAssignations'] . "<br><br>";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($con);
}

// Cerrar la conexión
mysqli_close($con);
?>