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
    <style>
        :root {
  --Fundo_m_s: #b3b3b3;
  --Fundo_m_n: #ffffff;
  --Menu: #c28d95;
  --Bordas: #ffc940;
  --Bordas_s: #e0bc61;
  --Links_m_n: #2c2c2c;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background-image: url(/imagens/Fundo.png);
  background-size: cover;
  background-attachment: fixed;
}
header {
  background-color: var(--Menu);
  margin-bottom: 40px;
}
div {
  text-align: center;
  text-align: left;
}
.logo {
  justify-content: center;
  width: 150px;
  padding: 10px;
  margin-bottom: 10px;
  transition: 1s;
}
.logo:hover {
  cursor: pointer;
  transition: 1s;
  transform: scale(1.1);
}
.links {
  justify-content: right;
  margin-right: 10px;
  display: flex;
}
.links a {
  border: 1px solid var(--Bordas);
  border-radius: 15px;
}
.links li {
  list-style: none;
  display: inline-block;
  margin-bottom: 10px;
}
.links a {
  background-color: var(--Fundo_m_n);
  color: var(--Links_m_n);
  text-decoration: none;
  padding: 3px;
}
.links .esp_sub {
  display: none;
}
.links a:hover {
  text-decoration: underline;
  color: var(--Links_m_s);
  background-color: var(--Fundo_m_s);
}
.menu-mobile {
  display: none;
}
.esp_sub a {
  text-align: center;
  background-color: var(--Fundo_m_n);
  display: none;
  border-radius: 0px;
}

@media screen and (max-width: 600px) {
  .logo {
    width: 150px;
    padding: 10px;
    margin-bottom: 10px;
    transition: 1s;
  }

  .links {
    display: none;
    flex: content;
    flex-direction: column;
  }
  .links li {
    list-style: none;
    display: flex;
    justify-content: center;
    margin-bottom: 10px;
  }
  .links .esp_sub {
    display: none;
  }
  .links a {
    margin: auto;
    text-align: center;
    font-size: 1.5em;
    line-height: 30px;
    border-radius: 0;
    border: 1px solid var(--Bordas);
    width: 50%;
  }
  .links a:hover {
    text-decoration: none;
  }
  .esp_sub a {
    margin: auto;
    text-align: center;
    font-size: 1em;
    display: none;
    width: 50%;
    line-height: 30px;
    border: 1px solid var(--Bordas);
    background-color: var(--Fundo_m_n);
  }
  .esp_sub a:hover {
    background-color: var(--Fundo_m_s);
  }
  .menu-mobile {
    display: block;
    float: right;
    border: none;
    width: 32px;
    height: 32px;
    background: transparent;
  }
}
/* Conteudo */
footer {
  background-color: var(--Fundo_m_n);
  padding: 20px;
  margin: auto;
  width: 90vw;
}
.container {
  position: relative;
}

.mySlides {
  display: none;
}
.mySlides img {
  margin: auto;
  display: block;
  width: 55vw;
}
.primeiro {
  display: block;
}

.cursor {
  cursor: pointer;
}
.cursor:hover {
  transform: scale(1.1);
  border: 1px solid var(--Bordas);
}

.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  padding: 15px;
  margin-top: -50px;
  font-weight: bold;
  font-size: 20px;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
}

.next {
  right: 0;
}

.imagens {
  background-color: var(--Fundo_m_s);
  margin: auto;
  width: 55vw;
  border: 2px solid var(--Bordas);
}

.demo {
  opacity: 0.4;
  width: 8vw;
}
.active,
.demo:hover {
  opacity: 1;
}

    </style>
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
