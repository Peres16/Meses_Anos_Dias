<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função include e Requiere em PHP</title>
    <style>
        body {
            background-color: aquamarine;
            font-size:20px;
        }
        hr {
            border-bottom:2px dashed red;
        }
        h3, p {
            color: blue;
            font-weight: bold;
        }
        </style>
</head>
<body>
    <?php
    echo "<h3 align='center'> FUNÇÃO INCLUDE E REQUIRE EM PHP</h3>";
    echo "<hr>";
    $meses = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    );
    $hoje = getdate(); //A função getdate, obtém a data do sistema operecional.
    $dia = $hoje["mday"]; // obtem o dia, referente a data do sistema opereacional.
    $mes = $hoje["mon"]; // Obtém o mês, o referente a data do sistema operacional.
    $ano = $hoje["year"]; // Obtém o ano, referente a data do sistema operecional
    echo "<strong>Data atual: ";
    echo $dia;
    echo "/";
    echo $mes;
    echo "/";
    echo $ano;
    ?>
</body>
</html>