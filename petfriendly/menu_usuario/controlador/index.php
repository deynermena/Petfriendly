<?php
session_start();
if(empty($_SESSION["Correo"])){
    header ("location:../inicio_sesion/vistas/login_cliente.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
    <link rel="shortcut icon" href="/petfriendly/iconos/bx-user.svg" type="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-center">Gestion de mascotas</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="frm">
                            <div class="form-group">
                                <label for="">Tipo de mascota</label>
                                <input type="hidden" name="idp" id="idp" value="">
                                <input type="enum" name="Tipomascota" id="Tipo" placeholder="Perro o gato" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="Nombre" id="Nombre" placeholder="Nombre de tu mascota" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Raza</label>
                                <input type="text" name="Raza" id="Raza" placeholder="La raza de tu mascota" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="int" name="ID" id="ID" placeholder="Orden de registro de mascota" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="button" value="Registrar" id="registrar" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 ml-auto">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="buscar">Buscar:</label>
                                <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-hover table-resposive">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tipo de mascota</th>
                            <th>Nombre</th>
                            <th>Raza</th>
                            <th>ID</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="resultado">

                    </tbody>
                </table>

                <div class="regresar">
        <button onclick="goBack()" ><i class='bx bxs-chevron-left bx-md' ></i>Volver</button>
        </div>

            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
function goBack() {
    window.location.href="http://localhost/petfriendly/menu_usuario/menu_cliente.php";
}
</script>
</body>

</html>