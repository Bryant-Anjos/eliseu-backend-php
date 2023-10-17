<?php

$id = $_GET['id'];
$nome = $_POST['nome'];

session_start();

foreach($_SESSION['usuarios'] as $chave => $usuario) {
    if ($usuario['id'] == $id) {
        $_SESSION['usuarios'][$chave]['nome'] = $nome;
    }
}

header('Location: /');
