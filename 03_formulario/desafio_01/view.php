<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>desafio</title>
</head>
<body>
    <h1>Calculadora de salario liquido</h1>
    <form action="logica.php" method="POST">

        <label for ="">Nome funcionario</label> <br>
        <input type="text" name="Nome">
        <br><br>
      
        <label for ="">Salario bruto</label> <br>
        <input type="number" name="Salario_bruto">
        <br><br>
        
        <label for ="">horas Extras</label> <br>
        <input type="number" name="horas_Extras">
        <br><br>
        
        <label for ="">Beneficios</label> <br>
        <input type="number" name="Beneficios">
        <br><br>
        
        <label for ="">Desconto</label> <br>
        <input type="number" name="Desconto">
        <br><br>

        <button type="submit">Calcular</button>
    
    </form>
</body>
</html>