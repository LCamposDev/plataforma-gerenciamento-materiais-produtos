<?php
    switch ($_REQUEST["acaovendas"]) {
        case 'vendas':
            $id = $_POST["id"];
            $data = $_POST["data"];
            $produto = $_POST["produto"];
            $desconto = ($_POST["desconto"]);
            $valor_desconto = $_POST["valor_desconto"];
            $custo_total = $_POST["custo_total"];
            $valor = $_POST["valor"];

           $sql = "INSERT INTO vendas (id, data, produto, desconto, valor_desconto, custo_total, valor) VALUES ('{$id}', '{$data}', '{$produto}', '{$desconto}', '{$valor_desconto}', '{$custo_total}', '{$valor}')";

           $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Venda cadastrada com sucesso');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           }
        break;

        case 'editar':
            $id = $_POST["id"];
            $data = $_POST["data"];
            $produto = $_POST["produto"];
            $desconto = $_POST["desconto"];
            $valor_desconto = $_POST["valor_desconto"];
            $custo_total = $_POST["custo_total"];
            $valor = $_POST["valor"];

            $sql = "UPDATE vendas SET data='{$data}', produto='{$produto}', desconto='{$desconto}', valor_desconto='{$valor_desconto}', custo_total='{$custo_total}', valor='{$valor}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           }
        break;

        case 'excluir':
            
            $sql = "DELETE FROM vendas WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           } else {
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           }

        break;
    }
?>