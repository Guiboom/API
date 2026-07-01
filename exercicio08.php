<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="nomeDoUsuario">Nome de usuério</label><br>
        <input type="text" name="nomeDoUsuario" id="nomeDoUsuario" required><br><br>
        <label for="senha">Senha</label><br>
        <input type="password" name="senha" id="senha" required><br><br>
        <input type="submit" value="enviar">
    </form>

    <?php
        if (isset($_POST['nomeDoUsuario']) && $_POST['nomeDoUsuario'] !== "" && isset($_POST['senha']) && $_POST['senha'] !== "") {

            $nome = $_POST['nomeDoUsuario'];
            $senha = $_POST['senha'];

            if ($nome === "GG" && $senha === "123"){
                echo "<span style='color: green;'>sucesso</span>";
            }else{
                echo "<span style='color: red;'>erro</span>";
            }
        }
    ?>
</body>
</html>