<?php
$servername = "localhost";
$username = "seu_usuario_do_banco";
$password = "sua_senha_do_banco";
$dbname = "nome_do_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$enteredUsername = $_POST['username'];
$enteredPassword = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$enteredUsername' AND password = '$enteredPassword'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    echo "Login bem sucedido!";
} else {
    echo "Usuário ou senha incorretos!";
}

$conn->close();
?>
