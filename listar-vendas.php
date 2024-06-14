<h1>Listar Vendas</h1>
<?php
    $sql = "SELECT * FROM vendas";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-houver table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Data</th>";
            print "<th>Produto</th>";
            print "<th>Valor de Desconto</th>";
            print "<th>Custo Total</th>";
            print "<th>Valor</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->data."</td>";
            print "<td>".$row->produto."</td>";
            print "<td>".$row->valor_desconto."</td>";
            print "<td>".$row->custo_total."</td>";
            print "<td>".$row->valor."</td>";
            print "<td>
                     <button onClick=\"location.href='?page=editarVendas&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                     <button onClick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarVendas&acaovendas=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>