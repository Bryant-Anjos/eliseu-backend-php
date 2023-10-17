<?php

$id = $_GET['id'];

session_start();

foreach($_SESSION['usuarios'] as $chave => $usuario) {
    if ($usuario['id'] == $id) {
        unset($_SESSION['usuarios'][$chave]);
    }
}

header('Location: /');
