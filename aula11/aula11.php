<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Aula 10 - POO com PHP</title>
    <meta charset="utf-8" />
    <meta name="description" content="Curso POO (PHP) - Aula 10" />
    <meta name="author" content="Carlos" />
    <meta name="keywords" content="OOP, PHP" />
</head>
<body>
<pre>
<?PHP

require_once 'Tecnico.php';
require_once 'Bolsista.php';
require_once 'Professor.php';
require_once 'Visitante.php';

$tecnico = new Tecnico
    (
        "TECNICO CARLOS",//$_nome,
        23, //$_idade,
        "M", //$_sexo,
        true, //$_matr,
        "BANCO DE DADOS", //$_curso
        "CRBD/123456" // NUMEROD da matricula profissional
    );

echo "<hr /><p>*Executando método praticar()</p>";
$tecnico->praticar();
$tecnico->pagarMensalidade();
print_r($tecnico);
echo "<hr />";


// implementar classe aluno
$bolsista = new Bolsista
    (
        "CARLOS EDUARDO DOS SANTOS ROBERTO",//$_nome,
        36, //$_idade,
        "M", //$_sexo,
        true, //$_matr,
        "SISTEMAS DE INFORMAÇÃO", //$_curso
        27.82 // valor da bolsa
    );

print_r($bolsista);

echo "O Valor da Bolsa é: ".$bolsista->getValorBolsa();
$bolsista->pagarMensalidade();
echo "<hr />";


$professor = new Professor
    (
        "ROBERTO", //$_nome
        45, // $_idade
        "M", // $_sexo
        "PROFESSORES_S1", // $_setor
        true, // $_trabalhando
        8900.00, // $_salario
        "MATEMÁTICA" // $_especialidade
    );

print_r($professor);
echo "<hr /><p>*apos AUMENTO DE SALARIO</p>";
$professor->receberAum(2500.00);
print_r($professor);
echo "<hr />";


$visitante = new Visitante("Duda",7,"F");
$visitante->fazerAniv();
print_r($visitante);


?>
</pre>
</body>
</html>