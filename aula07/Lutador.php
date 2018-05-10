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
        $this->setCategoria($p_Var);

    }

    private function setCategoria($p_Var) {

        if ( $p_Var < 52.2 || $p_Var > 120.2 ) {
            throw new Exception("Peso invalido");
        }
        else {
            if ( $p_Var<70.3 ) {
                $this->categoria = "Peso Leve";
            }
            elseif ( $p_Var>83.9 ) {
                $this->categoria = "Peso Pesado";
            }
            else {
                $this->categoria = "Peso Médio";
            }

        }

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
    function __construct($p_nome,$p_nacionalidade,$p_idade,$p_altura,
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

        echo "<p>-------------------------------------------------</p>";
        echo "<p>Senhoras e Senhores, diretamente do ".$this->getNacionalidade().",";
        echo " pesando ".$this->getPeso()."kg com ".$this->getVitorias()." Vitórias, ".$this->getEmpates()." empates e ".$this->getDerrotas();
        echo " derrotas, apresentamos....".$this->getNome()."</p>";

    }

    public function status() {

        echo "<p>-------------------------------------------------</p>";
        echo "<p>".$this->getNome()." é um peso ".$this->getCategoria();
        echo ", já venceu ".$this->getVitorias()." vezes, empatou ".$this->getEmpates()." ";
        echo "com ".$this->getDerrotas()." derrotas </p>";

    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias()+1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas()+1);
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates()+1);
    }


}
?>