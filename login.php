<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Conexão com o banco de dados (você pode incluir configurações de conexão do seu arquivo config.php).
    include("config.php");

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Verifique se o email existe no banco de dados.
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Email encontrado, recuperar o registro.
        $row = $result->fetch_assoc();

        // Comparar a senha fornecida com a senha no banco de dados.
        if ($senha === $row["senha"]) {
            // Senha correta, inicie a sessão e redirecione para a página de dashboard.
            $_SESSION["email"] = $email;
            header("location: index.php");
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Email não encontrado.";
    }

    $stmt->close();
    $conn->close();
}
?>
