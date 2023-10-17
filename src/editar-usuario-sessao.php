<?php

require_once('session.php');

$id = $_GET['id'];
$nome = $_POST['nome'];

editarUsuario($id, $nome);

header('Location: /');
