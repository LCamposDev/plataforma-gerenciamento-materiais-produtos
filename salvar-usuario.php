<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
           $nome = $_POST["nome"];
           $cargo = $_POST["cargo"];
           $email = $_POST["email"];
           $senha = md5($_POST["senha"]);
           $telefone = $_POST["telefone"];

           $sql = "INSERT INTO usuarios (nome, cargo, email, senha, telefone) VALUES ('{$nome}', '{$cargo}', '{$email}', '{$senha}', '{$telefone}')";

           $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
           } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
           }
        break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $telefone = $_POST["telefone"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}', telefone='{$telefone}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
           } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
           }
        break;

        case 'excluir':
            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
           } else {
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
           }

        break;
    }
?>