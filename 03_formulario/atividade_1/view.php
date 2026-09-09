<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuarios</title>
    <h1 style="text-align: center;">Cadastro de usuarios</h1>
</head>
<body>
    <form action="logica.php" method= "Post">
        <label for ="">Nome:</label>
        <input type="text" name="nome" placeholder="seu Nome" riquered>
        <br><br>
       
        <label for ="">email:</label>
         <input type="email" name="email" placeholder="seu melhor email" riquered>
        <br><br>

        <label for ="">Senha:</label>
        <input type="passaword" name="senha" placeholder="criar uma senha" riquered>
        <br><br>
        <button type= "submit">cadastrar</button>
        <button type= "reset">limpar</button>
    </form>
</body>
</html>
