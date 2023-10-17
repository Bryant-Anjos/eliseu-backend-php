<?php

require_once('session.php');

$id = $_GET['id'];

deletarUsuario($id);

header('Location: /');
