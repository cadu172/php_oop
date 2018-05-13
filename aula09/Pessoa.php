<?PHP

class Pessoa
{

	// atributos
	private $nome;
	private $idade;
	private $sexo;
	private $livroAtual;

	// construtor
	function __construct($_nome, $_idade, $_sexo)
	{
		$this->livroAtual = null;
		$this->setNome($_nome);
		$this->setIdade($_idade);
		$this->setSexo($_sexo);
	}

	// metodos especiais
	public function getNome()
	{
		return($this->nome);
	}

	public function setNome($_nome)
	{
		$this->nome=$_nome;
	}

	public function getIdade()
	{
		return($this->idade);
	}

	public function setIdade($_idade)
	{
		if ( $_idade < 0 )
		{
			throw new Exception("Informe uma idade valida");
		}
		else
		{
			$this->idade=$_idade;
		}
	}

	public function getSexo()
	{
		return($this->sexo);
	}

	public function setSexo($_sexo)
	{
		if ( $_sexo=="M" || $_sexo=="F" )
		{
			$this->sexo=$_sexo;
		}
		else
		{
			throw new Exception("Informe um sexo válido:  M (para masculino) ou F (para feminino)");
		}
	}

	// metodos da classe
	public function fazerAniver()
	{
		$this->idade++;
	}

	// incluido por carlos (nao estou seguindo o exemplo do exercicio)
	//
	public function lerLivro($_livro)
	{
		// associar o livro atual
		$this->livroAtual = $_livro;
		// abrir o livro
		$this->livroAtual->abrir();
	}

	// obtem o livro atual
	public function livroEmLeitura()
	{
		if ( $this->livroAtual == null )
		{
			throw new Exception("Nenhum livro foi selecionado para leitura");
		}
		else
		{
			return($this->livroAtual);
		}
	}

}

?>