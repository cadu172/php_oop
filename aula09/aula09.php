<?php

/*

regras:

- Existe uma agregação não obrigatória: Uma pessoa pode ler um livro ou não, mas somente um livro de cada vez
- Pode existir um livro sem uma pessoa, porem só podemos executar os metods com uma pessoa associada

*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title></title>
<meta charset="utf-8" />
</head>

<body >

<?php

// bibliotecas/classes
require_once 'Livro.php';
require_once 'Pessoa.php';

// criação de 2 livros
$livros[0] = new Livro("Java como Programar","Deitel",2000);
$livros[1] = new Livro("PHP OOP","Gustavo",700);
$livros[2] = new Livro("O Inferno de Dante","Dante Alighieri ",300);

// criação dos leitores
$leitores[0] = new Pessoa("Carlos Eduardo dos Santos", 36, "M");
$leitores[1] = new Pessoa("Janaina Amanda Domingues", 37, "F");
$leitores[2] = new Pessoa("Maria Eduarda Domingues dos Santos", 6, "F");

// carlos vai ler o livro de java
$leitores[0]->lerLivro($livros[0]); // carlos
$leitores[1]->lerLivro($livros[2]); // janaina
$leitores[2]->lerLivro($livros[1]); // duda

// imprimir o nome do livro
echo "O Leitor ".$leitores[0]->getNome().", está lendo o livro ".$leitores[0]->livroEmLeitura()->getTitulo()." do autor ".$leitores[0]->livroEmLeitura()->getAutor();
$leitores[0]->livroEmLeitura()->folhear();
$leitores[0]->livroEmLeitura()->folhear();
$leitores[0]->livroEmLeitura()->folhear();
$leitores[0]->livroEmLeitura()->folhear();
echo $leitores[0]->livroEmLeitura()->detalharPublicacao();

echo "<hr />";

echo "O Leitor ".$leitores[1]->getNome().", está lendo o livro ".$leitores[1]->livroEmLeitura()->getTitulo()." do autor ".$leitores[1]->livroEmLeitura()->getAutor();
$leitores[1]->livroEmLeitura()->folhear();
$leitores[1]->livroEmLeitura()->folhear();
echo $leitores[1]->livroEmLeitura()->detalharPublicacao();

echo "<hr />";

echo "O Leitor ".$leitores[2]->getNome().", está lendo o livro ".$leitores[2]->livroEmLeitura()->getTitulo()." do autor ".$leitores[2]->livroEmLeitura()->getAutor();
echo $leitores[2]->livroEmLeitura()->detalharPublicacao();


?>

</body>
</html>
