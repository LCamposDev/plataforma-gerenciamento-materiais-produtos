<?php
    switch ($_REQUEST["acaoproduto"]) {
        case 'produto':
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $tamanho = ($_POST["tamanho"]);
            $cor = $_POST["cor"];
            $valor = $_POST["valor"];
            $custo = $_POST["custo"];

           $sql = "INSERT INTO produto (id, nome, descricao, tamanho, cor, valor, custo) VALUES ('{$id}', '{$nome}', '{$descricao}', '{$tamanho}', '{$cor}', '{$valor}', '{$custo}')";

           $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Venda cadastrada com sucesso');</script>";
            print "<script>location.href='?page=listarProduto';</script>";
           } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listarProduto';</script>";
           }
        break;

        case 'editar':
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $tamanho = ($_POST["tamanho"]);
            $cor = $_POST["cor"];
            $valor = $_POST["valor"];
            $custo = $_POST["custo"];

            $sql = "UPDATE produto SET nome='{$nome}', descricao='{$descricao}', tamanho='{$tamanho}', cor='{$cor}', valor='{$valor}', custo='{$custo}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listarProduto';</script>";
           } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listarProduto';</script>";
           }
        break;

        case 'excluir':
            
            $sql = "DELETE FROM produto WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listarProduto';</script>";
           } else {
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listarProduto';</script>";
           }

        break;
    }
?>