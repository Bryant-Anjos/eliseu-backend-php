<?php

session_start();

if (empty($_SESSION['usuarios'])) {
  $_SESSION['usuarios'] = [];
}

function listarUsuarios() {
  $usuarios = $_SESSION['usuarios'];
  return $usuarios;
}

function criarUsuario($nome) {
  $id = rand(1, 1000000);

  $_SESSION['usuarios'][] = [
    'id' => $id,
    'nome' => $nome,
  ];
}

function deletarUsuario($id) {
  foreach($_SESSION['usuarios'] as $chave => $usuario) {
    if ($usuario['id'] == $id) {
        unset($_SESSION['usuarios'][$chave]);
    }
  }
}

function editarUsuario($id, $nome) {
  foreach($_SESSION['usuarios'] as $chave => $usuario) {
    if ($usuario['id'] == $id) {
        $_SESSION['usuarios'][$chave]['nome'] = $nome;
    }
  }
}
