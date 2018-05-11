<?
require_once 'Lutador.php';
require_once 'Luta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Aula 07 POO</title>
</head>
<body>

<?php

$arr_Lutador = array();

$arr_Lutador[0] = new Lutador
    (
    "Pretty Boy", //$p_nome,
    "França", //$p_nacionalidade,
    30, //$p_idade,
    1.75, //$p_altura,
    90.9, //$p_peso,
    11, //$p_vitorias,
    2, //$p_derrotas,
    1 //$p_empates
    );

$arr_Lutador[1] = new Lutador
    (
    "PuttyScript", //$p_nome,
    "Brasil", //$p_nacionalidade,
    29, //$p_idade,
    1.68, //$p_altura,
    90.5, //$p_peso,
    14, //$p_vitorias,
    2, //$p_derrotas,
    3 //$p_empates
    );

// criar luta
$luta = new Luta
    (
        $arr_Lutador[0], // desafiante
        $arr_Lutador[1]  // desafiado
    );

// marcar e lutar
$luta->marcarLuta();
$luta->lutar();
?>

</body>
</html>