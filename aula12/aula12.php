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

require_once 'Ave.php';
require_once 'Peixe.php';
require_once 'Reptil.php';
require_once 'Mamifero.php';
require_once 'Cachorro.php';
require_once 'Canguru.php';
require_once 'Tartaruga.php';

// instancia das classes
$obj_ave = new Ave();
$obj_peixe = new Peixe();
$obj_reptil = new Reptil();
$obj_mamifero = new Mamifero();
$obj_cachorro = new Cachorro();
$obj_canguru = new Canguru();
$obj_tartaruga = new Tartaruga();

echo "<br />Ave: " . $obj_ave->locomover();
echo "<br />Peixe: " . $obj_peixe->locomover();
echo "<br />Reptil: " . $obj_reptil->locomover();
echo "<br />Mamifero: " . $obj_mamifero->locomover();
echo "<br />Cachorro: " . $obj_cachorro->locomover();
echo "<br />Canguru: " . $obj_canguru->locomover();
echo "<br />Tartaruga: " . $obj_tartaruga->locomover();

echo "<hr />";

echo "<br />Ave: " . $obj_ave->emitirSom();
echo "<br />Peixe: " . $obj_peixe->emitirSom();
echo "<br />Reptil: " . $obj_reptil->emitirSom();
echo "<br />Mamifero: " . $obj_mamifero->emitirSom();
echo "<br />Cachorro: " . $obj_cachorro->emitirSom();
echo "<br />Canguru: " . $obj_canguru->emitirSom();
echo "<br />Tartaruga: " . $obj_tartaruga->emitirSom();

?>
</pre>
</body>
</html>