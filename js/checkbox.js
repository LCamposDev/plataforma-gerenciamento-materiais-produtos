// Seleciona o checkbox e o campo de valor com desconto
const checkboxDesconto = document.getElementById('checkboxDesconto');
const campoValorDesconto = document.getElementById('campoValorDesconto');

// Adiciona um ouvinte de evento para detectar mudanças no checkbox
checkboxDesconto.addEventListener('change', function() {
    // Verifica se o checkbox está marcado
    if (checkboxDesconto.checked) {
        // Se estiver marcado, habilita o campo de valor com desconto
        campoValorDesconto.disabled = false;
    } else {
        // Se não estiver marcado, desabilita o campo de valor com desconto e limpa seu valor
        campoValorDesconto.disabled = true;
        campoValorDesconto.value = '';
    }
});