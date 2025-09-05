<html>
<body>

    Bem vindo <?php echo $_POST["nome"]; ?><br>
    Seu email é: <?php echo $_POST["email"]; ?><br>
    Seu cpf é: <?php echo $_POST["cpf"]; ?><br>
    Seu comentário: <?php echo $_POST["comentario"]; ?><br><br>
    <a href="index.php">Voltar</a>
    <style>
        body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh; 
        margin: 0;
        }
</style>
</body>
</html>