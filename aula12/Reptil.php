<?PHP

require_once 'Animal.php';

class Reptil extends Animal
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



	//@ override
	public function locomover() {
		return("Reptil Rastejando...");
		}

	//@ override
	public function alimentar() {
		return("Reptil se alimentando...");
		}

	//@ override
	public function emitirSom() {
		return("Reptil Emitindo SOM...");
		}


}

?>