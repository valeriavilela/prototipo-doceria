<?php
const NOME_DOCERIA = "La Douceur de l’Amour";
$Doces = [
    "01" => ['produto' => "Bolacha", 'valor' => 2.50],
    "02" => ['produto' => "Pirulito", 'valor' => 1.00],
    "03" => ['produto' => "Balas", 'valor' => 1.00],
    "04" => ['produto' => "Bombom (unidade)", 'valor' => 2.00],
    "05" => ['produto' => "Bombom (caixa)", 'valor' => 15.00],
    "06" => ['produto' => "Jujuba", 'valor' => 1.00],
    "07" => ['produto' => "Paçoca (35 unidades)", 'valor' => 13.99],
    "08" => ['produto' => "Paçoca (unidade)", 'valor' => 1.00],
    "09" => ['produto' => "Salgadinhos", 'valor' => 3.99],
    "10" => ['produto' => "Marshimellow", 'valor' => 14.99],
    "11" => ['produto' => "Refrigerante", 'valor' => 2.50],
    "12" => ['produto' => "Suco", 'valor' => 1.99],
    "13" => ['produto' => "Achocolatado", 'valor' => 2.99],
    "14" => ['produto' => "Embalagens (geral)", 'valor' => 3.99],
    "15" => ['produto' => "Papel Presente", 'valor' => 1.99],
    "16" => ['produto' => "Sacolas", 'valor' => 1.00],
    "17" => ['produto' => "Bolos (por encomenda)", 'valor' => 20.00],
    "18" => ['produto' => "Chicletes", 'valor' => 1.00],
    "19" => ['produto' => "Torrone", 'valor' => 5.00],
    "20" => ['produto' => "Kit festa (bolo, salgadinhos, chocolates e balas)", 'valor' => 40.00],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Douceur de l’Amour</title>
    <link rel="stylesheet" href="design.css">

</head>

<body>
    <form action="envio.php" method="post">
        <?php 
        echo "<h1>" . NOME_DOCERIA . "</h1>"; 
        ?>
        <label>Escolha um ou mais itens: </label><br><br>
    <?php
        foreach ($Doces as $chave => $valor) {
        echo "<input type='checkbox' name='itens[]' value='$chave' id='$chave'>";
        echo "<label for='$chave'> {$valor['produto']} - R$ {$valor['valor']}</label><br>";
    } 
    ?>
    <br>
    <input type="submit" value="faça seu pedido!!!">
    </form>
</body>
</html>