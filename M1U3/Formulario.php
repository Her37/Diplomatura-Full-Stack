<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="subida.php" method="post">
        <div>
            <p>
                <label for="nom">Nombre</label>
                <input type="text" name="nombre" />
            </p>
            <p>
                <label for="ape">Apellido</label>
                <input type="text" name="apellido" />
            </p>
            <p>
                <label for="tel">Telefono</label>
                <input type="text" name="telefono" />
            </p>
            <p><label for="comentarios">Comentarios</label>
                <textarea name="comentarios" id="" cols="30" rows="10"></textarea>
            </p>
            <p><input type="submit" value="Enviar"></p>
            <p><input type="reset" value="Borrar"></p>
        </div>

    </form>
</body>

</html>