<?

class Lutador {

	// atributos
	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;	

	// Métodos GET
	public function getNome() {
		return($this->nome);
		}

	public function getNacionalidade() {
		return($this->nacionalidade);
		}

	public function getIdade() {
		return($this->idade);
		}

	public function getAltura() {
		return($this->altura);
		}

	public function getPeso() {
		return($this->peso);
		}

	public function getCategoria() {
		return($this->categoria);
		}

	public function getVitorias() {
		return($this->vitorias);
		}

	public function getDerrotas() {
		return($this->derrotas);
		}

	public function getEmpates() {
		return($this->empates);
		}
		
	// metodos SET		

	public function setNome($p_Var) {
		$this->nome = $p_Var;
		}

	public function setNacionalidade($p_Var) {
		$this->nacionalidade = $p_Var;
		}

	public function setIdade($p_Var) {
		$this->idade = $p_Var;
		}

	public function setAltura($p_Var) {
		$this->altura = $p_Var;
		}

	public function setPeso($p_Var) {
		
		$this->peso = $p_Var;
		
		if ( $p_Var < 60 || $p_Var > 120 ) {
			throw new Exception("Peso invalido");
		}
		else {
			if ( $p_Var<76 ) {
				$this->setCategoria("Peso Leve");
			}
			elseif ( $p_Var>90 ) {
				$this->setCategoria("Peso Pesado");
			}
			else {
				$this->setCategoria("Peso Médio");
			}
			
			
		}
		

	}

	public function setCategoria($p_Var) {
		$this->categoria = $p_Var;
		}

	public function setVitorias($p_Var) {
		$this->vitorias = $p_Var;
		}

	public function setDerrotas($p_Var) {
		$this->derrotas = $p_Var;
		}

	public function setEmpates($p_Var) {
		$this->empates = $p_Var;
		}

	// construtor
	public function __construct($p_nome,$p_nacionalidade,$p_idade,$p_altura,
		$p_peso,$p_vitorias,$p_derrotas,$p_empates) {
		
		$this->nome = $p_nome;
		$this->nacionalidade = $p_nacionalidade;
		$this->idade = $p_idade;
		$this->altura = $p_altura;		
		$this->vitorias = $p_vitorias;
		$this->derrotas = $p_derrotas;
		$this->empates = $p_empates;		
		
		// alterar o peso do lutador
		$this->setPeso($p_peso);
		
	}

	// metodos
	public function apresentar() {
	}

	public function status() {
	}

	public function ganharLuta() {
	}

	public function perderLuta() {
	}

	public function empatarLuta() {
	}


}


$lutador = new Lutador
(
"Carlos Eduardo dos Santos", //$p_nome,
"Brasileira", //$p_nacionalidade,
36, //$p_idade,
1.79, //$p_altura,
98, //$p_peso,
10, //$p_vitorias,
2, //$p_derrotas,
3 //$p_empates
);

echo "<pre>";
print_r($lutador);
echo "</pre>";

?>