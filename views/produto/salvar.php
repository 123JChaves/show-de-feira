<?php

    $id = $_POST["id"] ?? NULL;
    $nome = trim($_POST["nome"] ?? NULL);
    $categoria_id = $_POST["categoria_id"] ?? NULL;
    $descricao = $_POST["descricao"] ?? NULL;
    $valor = $_POST["valor"] ?? NULL;
    $ativo = $_POST["ativo"] ?? NULL;
    $destaque = $_POST["destaque"] ?? NULL;

    if (empty($nome)) {
        echo"<script>('Digite o nome do produto','produto','error');</script>";
    } else if (empty($categoria_id)) {
        echo"<script>mensagem('Digite a catgoria','produto','error');</script>";
    } else if (empty($descricao)) {
        echo"<script>mensagem('Digite a descrição','produto','error');</script>";
    } else if (empty($valor)) {
        echo"<script>mensagem('Digite o valor','produto','error');</script>";
    } else if (empty($ativo)) {
        echo"<script>mensagem('Selecione se está ativo','produto','error');</script>";
    } else if (empty($destaque)) {
        echo"<script>mensagem('Selecione o destaque','produto','error');</script>";
    } else {

    }

    $imagem = $_POST["imagem"] ?? time().".jpg";
    $_POST["imagem"] = $imagem;

    $msg = $this->produto->salvar($_POST);

    echo $msg;