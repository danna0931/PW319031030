<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Programacion Web</title>
    <script scr="botones.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000000; /* Fondo negro */
            color: #ffffff; /* Texto blanco */
            margin: 0;
            padding: 0;
        }

        table{
    border-collapse: collapse;
    width: 100%;
    background: linear-gradient(45deg, #ead1f4, #d2cccc); /* Color de fondo de la tabla */
    color: black; /* Color del texto */
    font-family: 'Poppins', sans-serif; /* Tipo de fuente */
    margin-top: 20px;
    width 70%;
}

        th,
        td {
            padding: 15px;
            border-style: ridge;
            visibility: visible;
        }

        th {
            height: 40px;
            text-align: left;
        }

        .informacion {
            border: 5px solid #ead1f4; /* Borde morado */
            text-align: center;
            margin-bottom: 2%;
            background-color: black; /* Fondo blanco */
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .botones {
            text-align: center;
            margin-bottom: 5px;
        }

        .btn-actualizar,
        .btn-borrar,
        .btn-registrar {
            background-color: #ead1f4; /* Morado */
            border: none;
            border-radius: 6px;
            font-size: 30px;
            padding: 0 30px;
            color: #ffffff;
            font-weight: 700;
            margin-top: 20px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .actualizar{
            background-color: #ead1f4; /* Morado */
            border: none;
            border-radius: 6px;
            font-size: 30px;
            padding: 0 30px;
            color: #ffffff;
            font-weight: 300;
            margin-top: 100px;
            margin-bottom: 0px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="informacion">
        <h1>Datos a actualizar</h1>
    </div>
    <div class="botones">
        <!--<button class="btn-borrar">Borrar</button>-->
        <button class="btn-registrar" onclick="window.location.href='sign.html'">Salir</button>
        <form action="actualizar_n.php" method="post">
            <button class="btn-actualizar">Actualizar</button>
            <table>
                <tr><th>ID</th><th>Correo</th><th>Password</th></tr>
                <tr><th><input type="text" name="id"></th>
                <th> <input type="text" name="correo"></th>
                <th><input type="text" name="password"></th>
            </table>
        </form>
    </div>
    <div>
        <?php include 'tabla_mostrar.php'; ?>
    </div>
</body>

</html>
