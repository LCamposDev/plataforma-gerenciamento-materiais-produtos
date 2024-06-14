# Documentação dos Arquivos do Projeto

Este repositório contém arquivos relacionados a um projeto em PHP. Abaixo, você encontrará informações sobre cada arquivo e sua finalidade no projeto.

## Arquivos PHP

### `cadastro.php`

Este arquivo PHP processa o formulário de cadastro de usuários. Ele insere novos registros no banco de dados, incluindo senhas criptografadas.

### `config.php`

Este arquivo PHP contém as configurações de conexão com o banco de dados. Certifique-se de personalizar as constantes `HOST`, `USER`, `PASS` e `BASE` de acordo com sua configuração.

### `editar-usuario.php`

Este arquivo PHP é usado para editar informações do usuário. Ele permite que o usuário atualize seu nome, e-mail, senha e telefone.

### `editar-vendas.php`

Este arquivo PHP permite editar informações de vendas. Os campos incluídos são tamanho, cor, prazo e produto.

### `index.php`

Este arquivo PHP é a página principal da aplicação, que requer que os usuários façam login. Ele também controla o roteamento das páginas, como cadastro de vendas e listagem de vendas.

### `listar-usuario.php`

Esta página PHP lista os usuários cadastrados no sistema, exibindo seus nomes, cargos, e-mails, senhas e telefones.

### `listar-vendas.php`

Esta página PHP lista as vendas registradas no sistema, mostrando os detalhes de cada venda, como tamanho, cor, prazo e produto.

### `login.php`

Este arquivo PHP processa o formulário de login dos usuários. Ele verifica se o e-mail e a senha fornecidos correspondem aos registros no banco de dados.

### `logout.php`

Este arquivo PHP encerra a sessão de um usuário logado, redirecionando-o para a página de login.

### `novo-usuario.php`

Este arquivo PHP fornece um formulário para criar um novo usuário. Ele permite que o usuário insira informações como nome, cargo, e-mail, senha e telefone.

### `novo-vendas.php`

Este arquivo PHP é responsável por criar um novo registro de vendas. Ele coleta informações como tamanho, cor, prazo e produto.

### `salvar-usuario.php`

Este arquivo PHP lida com as ações de cadastro, edição e exclusão de usuários. Ele atualiza o banco de dados de acordo com as ações solicitadas.

### `salvar-vendas.php`

Este arquivo PHP processa a ação de salvar vendas, incluindo adicionar, editar e excluir registros de vendas no banco de dados.

A documentação acima descreve cada arquivo presente no projeto, incluindo sua finalidade e ações relacionadas. Lembre-se de personalizar o banco de dados e as funcionalidades de acordo com as necessidades do seu projeto.
