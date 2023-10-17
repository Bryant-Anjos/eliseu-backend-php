<?php
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/editar-usuario-sessao.php?id=<?= $id ?>" method="POST">
        <label for="">
            Nome do usuário
        </label>
        <input type="text" name="nome">
        <button>
            Enviar
        </button>
    </form>
</body>
</html>