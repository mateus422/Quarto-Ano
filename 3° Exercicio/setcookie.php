<?php

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



function cookie1(){
   setcookie("paginas", "1", time()+3600);
if ( !$_COOKIE["qtd1"] or !$_COOKIE["Contador"] ){
	setcookie("qtd1", 0, time()+3600);
    setcookie("Contador",0,time()+3600);
}else{
	setcookie("qtd1", $_COOKIE["qtd1"] + 1,time()+3600);
    setcookie("Contador", $_COOKIE["Contador"] + $_COOKIE["qtd1"],time()+3600);
}

print_r($_COOKIE);
}

function cookie2(){
    setcookie("paginas", "2", time()+3600);
    
if ( !$_COOKIE["qtd2"] or !$_COOKIE["Contador"] ){
	setcookie("qtd2", 0, time()+3600);
    setcookie("Contador",0,time()+3600);
}else{
	setcookie("qtd2", $_COOKIE["qtd2"] + 1,time()+3600);
    setcookie("Contador", $_COOKIE["Contador"] + $_COOKIE["qtd2"],time()+3600);
}
    
print_r($_COOKIE);
}

function cookie3(){
    setcookie("paginas", "3", time()+3600);
if ( !$_COOKIE["qtd3"] ){
	setcookie("qtd3", 0, time()+3600);
}else{
	setcookie("qtd3", $_COOKIE["qtd3"] + 1,time()+3600);
    setcookie("Contador", $_COOKIE["Contador"] + $_COOKIE["qtd3"],time()+3600);
}
    

print_r($_COOKIE);
}

function cookie4(){
    setcookie("paginas", "4", time()+3600);
if ( !$_COOKIE["qtd4"] ){
	setcookie("qtd4", 0, time()+3600);
}else{
	setcookie("qtd4", $_COOKIE["qtd4"] + 1,time()+3600);
    setcookie("Contador", $_COOKIE["Contador"] + $_COOKIE["qtd4"],time()+3600);
}
    

print_r($_COOKIE);
}

function cookie5(){
    setcookie("paginas", "5", time()+3600);
if ( !$_COOKIE["qtd5"] ){
	setcookie("qtd5", 0, time()+3600);
}else{
	setcookie("qtd5", $_COOKIE["qtd5"] + 1,time()+3600);
    setcookie("Contador", $_COOKIE["Contador"] + $_COOKIE["qtd5"],time()+3600);
}
    

print_r($_COOKIE);
}

function cookie6(){
    setcookie("paginas", "6", time()+3600);
if ( !$_COOKIE["qtd6"] ){
	setcookie("qtd6", 0, time()+3600);
}else{
	setcookie("qtd6", $_COOKIE["qtd6"] + 1,time()+3600);
    setcookie("Contador", $_COOKIE["Contador"] + $_COOKIE["qtd6"],time()+3600);
}
    

print_r($_COOKIE);
}

function principal($pagina){
echo "<html>";
    
    echo "Estou na pagina  ".$pagina."<br>";
// Imprimir um cookie
echo "<a href='setcookie.php?pagina=1'>Pagina 1</a> <br>
	<a href='setcookie.php?pagina=2'>Pagina 2</a> <br>
	<a href='setcookie.php?pagina=3'>Pagina 3</a> <br>
	<a href='setcookie.php?pagina=4'>Pagina 4</a> <br>
	<a href='setcookie.php?pagina=5'>Pagina 5</a> <br>
	<a href='setcookie.php?pagina=6'>Pagina 6</a> <br>
	";

echo "<hr/>";
    echo "</html>";
}


$GLOBALS['pagina'] = $_GET['pagina'];

switch($GLOBALS['pagina']){
    case 1:
        principal($GLOBALS['pagina']);
        cookie1();
        
        break;
    case 2:
        principal($GLOBALS['pagina']);
        cookie2();
        
        break;
    case 3:
        principal($GLOBALS['pagina']);
        cookie3();
        
        break;
    case 4:
        principal($GLOBALS['pagina']);
        cookie4();
        
        break;
    case 5:
        principal($GLOBALS['pagina']);
        cookie5();
       
        break;
    case 6:
        principal($GLOBALS['pagina']);
        cookie6();
        
        break;
        
    }

?>
