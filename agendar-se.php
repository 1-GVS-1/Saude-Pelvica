
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agendamentos";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se os dados foram enviados
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])) {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Prepara e executa a inserção no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "Enviado com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}

// Fecha a conexão
$conn->close();
?>

