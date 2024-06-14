<h1>Nova Venda</h1>
<form action="?page=salvarVendas" method="POST">
    <input type="hidden" name="acaovendas" value="vendas">
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
    <div class="btn-group">
        <label>Desconto</label>
        <input type="checkbox" id="checkboxDesconto" name="desconto" class="btn btn-outline-primary" >
    </div>
    <div class="mb-3">
        <label>Valor com Desconto</label>
        <input type="number" id="campoValorDesconto" name="valor_desconto" class="form-control" disabled>
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