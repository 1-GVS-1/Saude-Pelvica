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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO usuarios (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagens/logo.png">
    <title>Saúde Pélvica</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/Agendar-se.css">
    <script src="JS/JavaScript.js"></script>
</head>
<body>
    <header>
        <button class="menu-mobile" onclick="openMenu()"><img id="menu-btn" src="imagens/Menu_off.png" alt=""></button>
        <a href="index.html"><img class="logo" src="imagens/logo.png" alt="logo"></a>
            <nav class="links">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Sobre.html">Sobre</a></li>
                    <li><a href="Agendar-se.html">Agendar-se</a></li>
                    <li><a  onclick="showEsp()" >Especialidades</a></li>


                    <li class="esp_sub"><a class="esp_sub" href="Uroginecologica.html"> Uroginecologica</a></p >
                    <li class="esp_sub"><a class="esp_sub" href="Obstétrica.html">Obstétrica</a></p >
                    <li class="esp_sub"><a class="esp_sub" href="Disfunção sexual Feminina.html">Disfunção sexual Feminina</a></p >
                    <li class="esp_sub"><a class="esp_sub" href="Uropediatria.html">Uropediatria</a></p >
                    <li class="esp_sub"><a class="esp_sub" href="Coloproctologica.html">Coloproctologica</a></p >
                    <li class="esp_sub"><a class="esp_sub" href="Terapias Manuais.html">Terapias Manuais</a></p >
                  </ul>
                  
                </nav>
           
              </header>
     <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar-se</title>
</head>
<body>
    <footer>
        <h1>Agendar-se</h1>
        <div class="agendar">
            <form action="Agendar-se.php" method="post">
                <label for="nome">Nome:</label>
                <th><input type="text" id="nome" name="nome" pattern="[a-zA-ZáéíóúâêîôûàèìòùãõäëïöüçÁÉÍÓÚÂÊÎÔÛÀÈÌÒÙÃÕÄËÏÖÜÇ]+" title="Digite seu nome" minlength="4" maxlength="100" placeholder="Digite seu nome" required></th>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required><br><br>
        
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" placeholder="Digite seu número" required><br><br>
        
          
        
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="4" placeholder="Digite aqui..."  maxlength="412"></textarea><br><br>
        
                <input type="submit" value="Enviar" name="submit" id="submit">
            </form>
        </div>
        
    </footer>
</body>
</html>
