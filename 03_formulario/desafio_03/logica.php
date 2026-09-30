<?php 
$cliente = $_POST['cliente']; 
$animal = $_POST['animal']; 
$idade = $_POST['idade']; 
$acontecimento = $_POST['acontecimento']; 
?>

<body style="background-image: url('clinica.png');">
<div style="text-align: center;margin-top: 150px;">

<?php
echo "<h1>Clínica Animal</h1>"; 
echo "<h2>Dados da Consulta</h2>"; 
echo "<b>Nome do cliente:</b> " . $cliente . "<br>"; 
echo "<b>Nome do animal:</b> " . $animal . "<br>"; 
echo "<b>Idade do animal:</b> " . $idade . " anos<br>"; 
echo "<b>Acontecimento:</b> " . $acontecimento . "<br>"; 
echo "<br>"; 
echo "<b>Consulta registrada com sucesso!</b><br>"; 
echo "<a href='view_relatorio.php'>Conheça nosso Catálogo</a>"; 
?>

</div>

</body>