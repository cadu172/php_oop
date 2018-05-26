<?PHP


abstract class Animal
{

	// atributos
	protected $peso;
	protected $idade;
	protected $membros;

	// metodos
	public abstract function locomover();
	public abstract function alimentar();
	public abstract function emitirSom();

	// getters
	public abstract function getPeso();
	public abstract function getIdade();
	public abstract function getMembros();

	// setters
	public abstract function setPeso($_peso);
	public abstract function setIdade($_idade);
	public abstract function setMembros($_membros);


}

?>