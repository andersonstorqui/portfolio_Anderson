<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)) {
    // Obter os dados do formulário
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    // $emailAspasDuplas = str_replace("'", "\"", $email);


    // Inserir os dados no banco de dados
    $sql = "INSERT INTO clientes (nome, sobrenome, email, assunto, mensagem) VALUES ('$nome', '$telefone', '$email', '$assunto', '$mensagem')";
    if ($conn->query($sql) === TRUE) {
        echo '<p>Dados salvos com sucesso!</p>';

    } else {
        echo "Erro ao salvar os dados: " . $conn->error;
    }
}
$conn->close();
?>
