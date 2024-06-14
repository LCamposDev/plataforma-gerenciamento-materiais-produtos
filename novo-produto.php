<h1>Novo Produto</h1>
<form action="?page=salvarProduto" method="POST">
    <input type="hidden" name="acaoproduto" value="vendas">
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