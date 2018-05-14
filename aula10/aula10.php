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

require_once 'Aluno.php';
require_once 'Professor.php';

// implementar classe aluno
$alunos[0] = new Aluno
    (
        "CARLOS EDUARDO DOS SANTOS ROBERTO",//$_nome,
        36, //$_idade,
        "M", //$_sexo,
        true, //$_matr,
        "SISTEMAS DE INFORMAÇÃO" //$_curso
    );


print_r($alunos[0]);
echo "<hr /><p>*apos o cancelamento da matricula</p>";
$alunos[0]->cancelarMatr();
print_r($alunos[0]);
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

?>
</pre>
</body>
</html>