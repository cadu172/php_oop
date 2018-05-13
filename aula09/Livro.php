<?PHP

// interface usada pela classe
require_once 'IPublicacao.php';

// classe livro, implementação da interface publicacao
class Livro implements IPublicacao
{

	// atributos
	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;

	// construtor
	function __construct($_titulo,$_autor,$_totPaginas)
	{
		$this->pagAtual = 0;
		$this->aberto = false;
		$this->setTitulo($_titulo);
		$this->setAutor($_autor);
		$this->setTotPaginas($_totPaginas);
	}

	// metodos especiais
	public function getTitulo()
	{
		return($this->titulo);
	}

	public function setTitulo($_titulo)
	{
		$this->titulo = $_titulo;
	}

	public function getAutor()
	{
		return($this->autor);
	}

	public function setAutor($_autor)
	{
		$this->autor = $_autor;
	}

	public function getTotPaginas()
	{
		return($this->totPaginas);
	}

	public function setTotPaginas($_paginas)
	{
		$this->totPaginas = $_paginas;
	}

	// metodos (interface)
	public function abrir()
	{
		$this->pagAtual = 1;
		$this->aberto = true;
	}

	public function fechar()
	{

		if( ! $this->aberto )
		{
			throw new Exception("O Livro já estava fechado");
		}

		$this->pagAtual = 0;
		$this->aberto = false;
	}

	public function folhear()
	{

		if( ! $this->aberto )
		{
			throw new Exception("O Livro não pode ser folheado porque está fechado");
		}

		if( $this->pagAtual == $this->getTotPaginas() )
		{
			$this->fechar();
		}
		else
		{
			$this->pagAtual++;
		}
	}

	public function avancarPag()
	{
		if( ! $this->aberto )
		{
			throw new Exception("A página não pode avançar porque o livro está fechado");
		}

		if( $this->pagAtual == $this->getTotPaginas() )
		{
			$this->fechar();
		}
		else
		{
			$this->pagAtual++;
		}
	}

	public function voltarPag()
	{
		if( ! $this->aberto )
		{
			throw new Exception("A página não pode voltar porque o livro está fechado");
		}

		if( $this->pagAtual == 1 )
		{
			$this->fechar();
		}
		else
		{
			$this->pagAtual--;
		}
	}


	public function detalharPublicacao()
	{

		// variável de retorno
		$strRetorno = "";
		$strRetorno .= "<table border='1' cellpadding='3' cellspacing='0'>";
		$strRetorno .= "<thead>";
		$strRetorno .= "<tr><td>Campo</td><td>Detalhe</td><tr>";
		$strRetorno .= "</thead>";
		$strRetorno .= "<tbody>";
		$strRetorno .= "<tr><td>Titulo do Livro</td><td>".$this->titulo."</td><tr>";
		$strRetorno .= "<tr><td>Autor</td><td>".$this->autor."</td><tr>";
		$strRetorno .= "<tr><td>Total de Páginas</td><td>".$this->totPaginas."</td><tr>";
		$strRetorno .= "<tr><td>Página Atual</td><td>".$this->pagAtual."</td><tr>";
		$strRetorno .= "<tr><td>Livro Aberto</td><td>".$this->aberto."</td><tr>";
		$strRetorno .= "</tbody>";
		$strRetorno .= "</table>";

		// retorna a atabela
		return($strRetorno);

	}
}


?>