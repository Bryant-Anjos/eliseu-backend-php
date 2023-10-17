<?php

$nome = $_POST['nome'];

session_start();

if (empty($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

$id = rand(1, 1000000);

$_SESSION['usuarios'][] = [
    'id' => $id,
    'nome' => $nome,
];

header('Location: /');
