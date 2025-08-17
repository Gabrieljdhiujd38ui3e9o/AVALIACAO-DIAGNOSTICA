<?php
// quetsao01
echo " <b>Questão 01 </b> <br><br>";
$temperatura1 = 12;
$temperatura2 = 18;
$temperatura3 = 25;
$temperatura4 = 32;
$temperatura5 = 28;

echo "Temperatura 1: {$temperatura1}°C -";
if ($temperatura1 > 30) {
    echo " Alerta: temperatura alta!";
} elseif ($temperatura1 < 15) {
    echo " Alerta: temperatura baixa!";
} else {
    echo " Temperatura normal.";
}
echo "<br>";

echo "Temperatura 2: {$temperatura2}°C -";
if ($temperatura2 > 30) {
    echo " Alerta: temperatura alta!";
} elseif ($temperatura2 < 15) {
    echo " Alerta: temperatura baixa!";
} else {
    echo " Temperatura normal.";
}

echo "<br>";

echo "Temperatura 3: {$temperatura3}°C -";
if ($temperatura3 > 30) {
    echo " Alerta: temperatura alta!";
} elseif ($temperatura3 < 15) {
    echo " Alerta: temperatura baixa!";
} else {
    echo " Temperatura normal.";
}

echo "<br>";

echo "Temperatura 4: {$temperatura4}°C -";
if ($temperatura4 > 30) {
    echo " Alerta: temperatura alta!";
} elseif ($temperatura4 < 15) {
    echo " Alerta: temperatura baixa!";
} else {
    echo " Temperatura normal.";
}
 
echo "<br>";

echo "Temperatura 5: {$temperatura5}°C -";
if ($temperatura5 > 30) {
    echo " Alerta: temperatura alta!";
} elseif ($temperatura5 < 15) {
    echo " Alerta: temperatura baixa!";
} else {
    echo " Temperatura normal.";
}
echo "<br>";
 
$soma = $temperatura1 + $temperatura2 + $temperatura3 + $temperatura4 + $temperatura5;
$media = $soma / 5;

echo "<br>Média das temperatura: " . number_format($media, 2) . "°C <br>";



// QUESTÃO 02 (1 ponto) - Uma escola deseja exibir a tabuada de um número específico e informar se o resultado é par ou ímpar.



echo "<br> <b>Questão 02</b> <br>";
$numero = 4; 
echo "<br>";

for ($i = 1; $i <= 10; $i++) { 
    $resultado = $numero * $i;
    if ($resultado % 2 == 0) {
        $par_ou_impar = "Par";
    } else {
        $par_ou_impar = "Ímpar";
    }
    
    echo $numero . " x " . $i . " = " . $resultado . " (" . $par_ou_impar . ")<br>";
}




// QUESTÃO 03 (1 ponto) - Uma loja deseja calcular o valor total de uma compra de 5 produtos com preços fixos definidos no código.

echo "<br> <b>Questão 03</b>";
echo "<br>";


$produto1 = 40;
$produto2 = 60;
$produto3 = 30;
$produto4 = 20;
$produto5 = 70;


$total_compra = $produto1 + $produto2 + $produto3 + $produto4 + $produto5;

echo " <br>Total da compra: R$ " . number_format($total_compra, 2) . "<br>";

if ($total_compra > 200) {
    
    $desconto = $total_compra * 0.10;
    $total_com_desconto = $total_compra - $desconto;
    echo " <br>Desconto de 10% aplicado: R$ " . number_format($total_com_desconto, 2) . "<br>";
} else {
}


//QUESTÃO 04 (2 pontos) - Um grupo de pessoas tem suas idades definidas no código. O objetivo é classificar cada pessoa.

echo "<br> <b>Questão 04</b>";
$idade1 = 10;
$idade2 = 15;
$idade3 = 25;
$idade4 = 60;
$idade5 = 40;
$total_criancas = 0;
$total_adolescentes = 0;
$total_adultos = 0;
$total_idosos = 0;

echo "<br> <br>Pessoa 1: " . $idade1 . " anos";
if ($idade1 < 13) {
    echo " - Criança<br>";
    $total_criancas++;
} elseif ($idade1 >= 13 && $idade1 <= 19) {
    echo " - Adolescente";
    $total_adolescentes++;
} elseif ($idade1 >= 20 && $idade1 <= 59) {
    echo " - Adulto";
    $total_adultos++;
} else {
    echo " - Idoso";
    $total_idosos++;
}


echo "Pessoa 2: " . $idade2 . " anos";
if ($idade2 < 13) {
    echo " - Criança";
    $total_criancas++;
} elseif ($idade2 >= 13 && $idade2 <= 19) {
    echo " - Adolescente";
    $total_adolescentes++;
} elseif ($idade2 >= 20 && $idade2 <= 59) {
    echo " - Adulto";
    $total_adultos++;
} else {
    echo " - Idoso";
    $total_idosos++;
}
echo "<br>";

echo "Pessoa 3: " . $idade3 . " anos";
if ($idade3 < 13) {
    echo " - Criança";
    $total_criancas++;
} elseif ($idade3 >= 13 && $idade3 <= 19) {
    echo " - Adolescente";
    $total_adolescentes++;
} elseif ($idade3 >= 20 && $idade3 <= 59) {
    echo "- Adulto";
    $total_adultos++;
} else {
    echo " - Idoso";
    $total_idosos++;
}

echo "<br>";

echo "Pessoa 4: " . $idade4 . " anos";
if ($idade4 < 13) {
    echo " - Criança";
    $total_criancas++;
} elseif ($idade4 >= 13 && $idade4 <= 19) {
    echo " - Adolescente";
    $total_adolescentes++;
} elseif ($idade4 >= 20 && $idade4 <= 59) {
    echo " - Adulto";
    $total_adultos++;
} else {
    echo " - Idoso";
    $total_idosos++;
}

echo "<br>";

echo "Pessoa 5: " . $idade5 . " anos";
if ($idade5 < 13) {
    echo " - Criança";
    $total_criancas++;
} elseif ($idade5 >= 13 && $idade5 <= 19) {
    echo " - Adolescente";
    $total_adolescentes++;
} elseif ($idade5 >= 20 && $idade5 <= 59) {
    echo " - Adulto";
    $total_adultos++;
} else {
    echo " - Idoso";
    $total_idosos++;
}

echo "<br>";
echo "<br>Resumo:<br>"; 
echo "<br>";
echo "Quantidade de Crianças: " . $total_criancas . "<br>";
echo "Quantidade de Adolescentes: " . $total_adolescentes . "<br>";
echo "Quantidade de Adultos: " . $total_adultos . "<br>";
echo "Quantidade de Idosos: " . $total_idosos . "<br>";

?>