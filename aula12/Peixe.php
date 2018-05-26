<?PHP

require_once 'Animal.php';

class Peixe extends Animal
{

	// atributos
	private $corEscama;

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

	public function getCorEscama() {
		return($this->corEscama);
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

	public function setCorEscama($_corEscama) {
		$this->corEscama = $_corEscama;
	}


	// ###### metodos publicos ######
	//@ override
	public function locomover() {
		return("Nadando...");
	}

	//@ override
	public function alimentar() {
		return("Comendo residuos na agua...");
	}

	//@ override
	public function emitirSom() {
		return("Animal nao emite som...");
	}

	// public
	public function soltarBolha() {
		return("Soltando Bolhas...");
	}

}

?>