<?php
$pagina = null;
if (!$pagina) {
	$pagina=1;
}else{
$pagina = $_GET['pagina'];
}
/*function definirCookie1(){
	setcookie("user", "Ricardo Rubens", time()+3600);
if ( !$_COOKIE["qtd"] ){
	setcookie("qtd", 1, time()+3600);
}else{
	setcookie("qtd", $_COOKIE["qtd"] + 1,time()+3600);
}
echo "<html>";
// Imprimir um cookie
echo "<a href='#definirCookie2'>Pagina 2</a> <br>
	<a href='Pagina3.html'>Pagina 3</a> <br>
	<a href='Pagina4.html'>Pagina 4</a> <br>
	<a href='Pagina5.html'>Pagina 5</a> <br>
	<a href='Pagina6.html'>Pagina 6</a> <br>
	";
echo "cookie user: ".$_COOKIE["user"];
echo "<hr/>";
echo "todos: <br/>";
// Ver todos os cookies
print_r($_COOKIE);
}*/

function definirCookie2($pagina){
	setcookie("user", "Ricardo Rubens", time()+3600);
if ( !$_COOKIE["qtd"] ){
	setcookie("qtd", 1, time()+3600);
}else{
	setcookie("qtd", $_COOKIE["qtd"] + 1,time()+3600);
}
echo "<html>";
// Imprimir um cookie
echo "oi, estou na pagina $pagina";
echo "<a href='pagina.php?pagina=1'>Pagina 1</a> <br>
	<a href='pagina.php?pagina=2'>Pagina 2</a> <br>
	<a href='pagina.php?pagina=3'>Pagina 3</a> <br>
	<a href='pagina.php?pagina=4'>Pagina 4</a> <br>
	<a href='pagina.php?pagina=5'>Pagina 5</a> <br>
	<a href='pagina.php?pagina=6'>Pagina 6</a> <br>
	";
echo "cookie user: ".$_COOKIE["user"];
echo "<hr/>";
echo "todos: <br/>";
// Ver todos os cookies
print_r($_COOKIE);
}


definirCookie2($pagina);


?>
