# Plataforma de Gerenciamento de Materiais e Produtos

## Visão Geral

Desenvolvemos uma plataforma web para otimizar o gerenciamento de materiais e produtos, automatizando processos, controlando o estoque e facilitando o acesso à informação.

## Metodologia

O projeto foi desenvolvido com escopo fechado, incluindo:
1. **Estudo de Caso e Análise de Requisitos**
2. **Prototipação de Casos de Uso (UML)**
3. **Design de Prototipagem**
4. **Desenvolvimento Funcional**

## Requisitos

- **Linguagem**: PHP
- **Servidor Web**: Apache

## Instalação

1. Clone o repositório:
    ```bash
    git clone https://github.com/LCamposDev/plataforma-gerenciamento-materiais-produtos.git
    ```
2. Navegue até o diretório do projeto:
    ```bash
    cd plataforma-gerenciamento-materiais-produtos
    ```
3. Configure o Apache para apontar para o diretório do projeto.
4. Certifique-se de ter PHP e Apache instalados e configurados corretamente.

## Configuração

1. Edite `config.php` para ajustar as configurações do banco de dados.
2. Inicie o servidor Apache:
    ```bash
    sudo service apache2 start
    ```

## Documentação dos Arquivos

### Arquivos PHP

- **`cadastro.php`**: Processa o formulário de cadastro de usuários.
- **`config.php`**: Configurações de conexão com o banco de dados.
- **`editar-usuario.php`**: Edita informações do usuário.
- **`editar-vendas.php`**: Edita informações de vendas.
- **`index.php`**: Página principal que requer login.
- **`listar-usuario.php`**: Lista os usuários cadastrados.
- **`listar-vendas.php`**: Lista as vendas registradas.
- **`login.php`**: Processa o formulário de login.
- **`logout.php`**: Encerra a sessão do usuário.
- **`novo-usuario.php`**: Formulário para criar um novo usuário.
- **`novo-vendas.php`**: Cria um novo registro de vendas.
- **`salvar-usuario.php`**: Lida com cadastro, edição e exclusão de usuários.
- **`salvar-vendas.php`**: Processa a ação de salvar vendas.

## Contribuição

1. Faça um fork do projeto.
2. Crie uma branch (`git checkout -b feature/nova-feature`).
3. Commit suas mudanças (`git commit -m 'Adiciona nova feature'`).
4. Envie para o repositório (`git push origin feature/nova-feature`).
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob os termos da licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
```
