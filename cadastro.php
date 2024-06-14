<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cargo = $_POST["cargo"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];

    // Conexão com o banco de dados (você pode incluir configurações de conexão do seu arquivo config.php).

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Verifique se o nome de usuário já existe no banco de dados.
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "E-mail já existe.";
    } else {
        // Nome de usuário não existe, insira os dados na base de dados.
        $sql = "INSERT INTO usuarios (nome, email, cargo, senha, telefone) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $nome, $email, $cargo, $senha, $telefone);

        if ($stmt->execute()) {
            header("location: html/login.html");
        } else {
            echo "Erro no cadastro: " . $conn->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>
