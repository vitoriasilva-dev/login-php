<?php
// login.php

session_start();

$valid_username = "admin";
$valid_password = "novaSenha";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        echo "Login realizado com sucesso!";
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Simples</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label>Usuário:</label><br>
        <input type="text" name="username"><br>
        <label>Senha:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
