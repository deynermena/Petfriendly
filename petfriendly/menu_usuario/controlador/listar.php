<?php
$data = file_get_contents("php://input");
require "conexion.php";
$consulta = $pdo->prepare("SELECT * FROM mascotas ORDER BY ID DESC");
$consulta->execute();
if ($data != "") {
    $consulta = $pdo->prepare("SELECT * FROM mascotas WHERE ID LIKE '%".$data."%' OR Nombre LIKE '%".$data."%' OR Raza LIKE '%".$data."%'");
    $consulta->execute();
}
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['Tipomascota'] . "</td>
            <td>" . $data['Nombre'] . "</td>
            <td>" . $data['Raza'] . "</td>
            <td>" . $data['ID'] . "</td>
            <td>
                <button type='button' class='btn btn-success' onclick=Editar('" . $data['ID'] . "')>Editar</button>
                <button type='button' class='btn btn-danger' onclick=Eliminar('" . $data['ID'] . "')>Eliminar</button>
            </td>
        </tr>";
}
