<?PHP
interface IPublicacao
{
	function abrir();
	function fechar();
	function folhear();
	function avancarPag();
	function voltarPag();
	function detalharPublicacao();
}
?>