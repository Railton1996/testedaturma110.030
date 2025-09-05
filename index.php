<html>
<body>
    <h1>Formulário</h1>
<form action="welcome.php" method="POST">
    Nome: <input required="nome" type="text" name="nome"><br><br>
    Email: <input required="email" type="text" name="email"><br><br>
    CPF: <input required="cpf" type="text" name="cpf"><br><br>
    Comentário: <textarea name="comentario" rows="5" cols="40"></textarea><br><br>
<input type="submit">
<button type="reset">Limpar</button>

</form>
    <style>
        body{
        background-color: gray;
        } input{
        background-color: white; color: red;}
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