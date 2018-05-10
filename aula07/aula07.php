<?require_once 'Lutador.php';?>
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
    57.8, //$p_peso,
    14, //$p_vitorias,
    2, //$p_derrotas,
    3 //$p_empates
    );

$arr_Lutador[2] = new Lutador
    (
    "SnapShadow", //$p_nome,
    "EUA", //$p_nacionalidade,
    35, //$p_idade,
    1.65, //$p_altura,
    80.9, //$p_peso,
    12, //$p_vitorias,
    2, //$p_derrotas,
    1 //$p_empates
    );


//echo "<pre>";
//print_r($lutador);
//echo "</pre>";

$arr_Lutador[0]->apresentar();
$arr_Lutador[0]->perderLuta();
$arr_Lutador[0]->apresentar();
//$arr_Lutador[0]->setCategoria(200); // erro propossital, metodo private
//$arr_Lutador[1]->apresentar();
//$arr_Lutador[2]->apresentar();


?>

</body>
</html>