<?PHP

require_once 'Mamifero.php';

class Cachorro extends Mamifero
{
	public function enterrarOsso() {
		return("Cachorro enterrando osso...");
	}

	public function abanarRabo() {
		return("Cachorro abanando o rabo");
	}

	//@ override
	public function emitirSom()
	{
		return("Au au au...");
	}

}

?>