<?php

require_once('session.php');

$nome = $_POST['nome'];

criarUsuario($nome);

header('Location: /');
