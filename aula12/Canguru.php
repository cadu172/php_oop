<?PHP

require_once 'Mamifero.php';

class Canguru extends Mamifero
{

	public final function usarBolsa() {
		return("Canguru usando Bolsa");
	}

	//@overRide
	public function locomover() {
		return("Canguru Saltando...");
	}

}

?>