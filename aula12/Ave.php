<?PHP

require_once 'Animal.php';

class Ave extends Animal
{

	// atributos
	private $corPena;


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

	public function getCorPena() {
		return($this->corPena);
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

	public function setCorPena($_corPena) {
		$this->corPena = $_corPena;
	}

	// ### public method ###
	//@ override
	public function locomover() {
		return("Voando...");
	}

	//@ override
	public function alimentar() {
		return("Comendo frutas");
	}

	//@ override
	public function emitirSom() {
		return("Cantando/Piando...");
	}

	// public
	public function fazerNinho() {
		return("Fazendo Ninho...");
	}

}

?>