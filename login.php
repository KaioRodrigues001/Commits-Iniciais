<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="authentication.php">
        <p>
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
        </p>
        <p>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
        </p>
        <input type="submit" value="Login">
    </form>
</body>
</html>
