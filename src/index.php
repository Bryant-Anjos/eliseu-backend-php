<?php
    require_once('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/criar-usuario.php">
        Criar usuários
    </a>
    <ul>
        <?php foreach(listarUsuarios() as $usuario) { ?>
            <li>
                <?= $usuario['nome'] ?>
                <a href="/excluir-usuario.php?id=<?= $usuario['id'] ?>">
                    Excluir
                </a>
                <a href="/editar-usuario.php?id=<?= $usuario['id'] ?>">
                    Editar
                </a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>