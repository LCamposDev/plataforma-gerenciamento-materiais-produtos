<h1>Editar Vendas</h1>
<?php
    $sql = "SELECT * FROM vendas WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    if (!$res) {
        echo "Erro na consulta: " . $conn->error;
        // ou
        echo "Erro na consulta: " . mysqli_error($conn);
        // ou
        die("Erro na consulta: " . $conn->error);
    }
    $row = $res->fetch_object();
?>
<form action="?page=salvarVendas" method="POST">
    <input type="hidden" name="acaovendas" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>id</label>
        <input type="number" name="id" class="form-control">
    </div>
    <div class="mb-3">
        <label>data</label>
        <input type="date" name="data" class="form-control">
    </div>
    <div class="mb-3">
        <label>Produto</label>
        <input type="text" name="produto" class="form-control">
    </div>
    <div class="mb-3">
        <label>Desconto</label>
        <input type="checkbox" name="desconto" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor com Desconto</label>
        <input type="number" name="valor_desconto" class="form-control">
    </div>
    <div class="mb-3">
        <label>Custo Total</label>
        <input type="number" name="custo_total" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor</label>
        <input type="number" name="valor" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>