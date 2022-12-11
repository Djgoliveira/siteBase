<?php
include "conecta_mysql.inc";
$operacao = $_POST["operacao"];

    if ($operacao =="Incluir"){
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO tb_usuarios (nome_usuario, senha) VALUES ";
        $sql = "('$nome', '$senha')";
        $resultado = mysql_query ($sql);
        echo "Usuários incluídos com sucesso !";
    }
    elseif ( echo "Erro ao incluir novo usuário");

    mysql_close($conexao);

