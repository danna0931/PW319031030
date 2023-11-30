<?php
$servidor="localhost";
$user="root"; 
$psw="";
$db="registros";

$conn=new mysqli($servidor,$user,$psw,$db);


// Recuperar los datos de la tabla
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

// Generar la tabla HTML
if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Correo</th><th>Password</th></tr>\n";
  // Salida de datos de cada fila
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["correo"]."</td><td>".$row["password"]."</td>\n";
    echo "<td>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='id_a_eliminar' value='" . $row['id'] . "'>";
    echo "<input type='hidden' name='confirmacion' value='SI'>"; 
    
    echo "</form>";
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 resultados";
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirmacion'])) {
  // El formulario de confirmación ha sido enviado

  
}
// Cerrar la conexión
$conn->close();
?>