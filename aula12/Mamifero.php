<?PHP

require_once 'Animal.php';

class Mamifero extends Animal
{

	// atributos
	private $corPelo;

	// ######   getters   #######
	// override
	public function getPeso() {
		return($this->peso);
	}

	// override
	public function getIdade() {
		return($this->idade);
	}

	// override
	public function getMembros() {
		return($this->membros);
	}

	public function getCorPelo() {
		return($this->corPelo);
	}


	// ######   setters   #######
	// override
	public function setPeso($_peso) {
		$this->peso = $_peso;
	}

	// override
	public function setIdade($_idade) {
		$this->idade = $_idade;
	}

	// override
	public function setMembros($_membros) {
		$this->membros = $_membros;
	}

	public function setCorPelo($_corPelo) {
		$this->corPelo = $_corPelo;
	}


	//@ override
	public function locomover() {
		return("Correndo...");
	}

	//@ override
	public function alimentar() {
		return("Mamando...");
	}

	//@ override
	public function emitirSom() {
		return("Som de mamifero...");
	}


}

?>