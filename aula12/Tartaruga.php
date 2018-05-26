<?PHP

require_once 'Reptil.php';

class Tartaruga extends Reptil
{
	//@ override
	public function locomover() {
		return("Tartaruga andando quase parando...");
	}

	//@ override
	public function emitirSom()
	{
		return("Este animal nao emite som...");
	}

}

?>