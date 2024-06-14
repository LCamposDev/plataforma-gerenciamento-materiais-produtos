<h1>Editar Produto</h1>
<?php
    $sql = "SELECT * FROM produto WHERE id=".$_REQUEST["id"];

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
<form action="?page=salvarProduto" method="POST">
    <input type="hidden" name="acaoproduto" value="vendas">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>id</label>
        <input type="number" name="id" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tamanho</label>
        <input type="number" name="tamanho" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor</label>
        <input type="number" name="valor" class="form-control">
    </div>
    <div class="mb-3">
        <label>Custo</label>
        <input type="number" name="custo" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>