<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$enteredUsername = $_POST['username'];
$enteredPassword = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE usuario = '$enteredUsername' AND senha = '$enteredPassword'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    echo "Login bem sucedido!";
} else {
    echo "Usuário ou senha incorretos!";
}

$conn->close();
?>
