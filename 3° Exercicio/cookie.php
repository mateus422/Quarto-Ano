<?php
$pagina = $_GET['pagina'];
/*$pagina;
if (!$pagina) {
    $pagina=1;
} else{
    $pagina = $_GET['pagina'];
}*/
function definirCookie(){
    global $pagina;
echo "<html>"; 
echo "Estou na pagina  ".$pagina."<br>";
echo "<a href='cookie.php?pagina=1'>Pagina 1</a> <br>
    <a href='cookie.php?pagina=2'>Pagina 2</a> <br>
    <a href='cookie.php?pagina=3'>Pagina 3</a> <br>
    <a href='cookie.php?pagina=4'>Pagina 4</a> <br>
    <a href='cookie.php?pagina=5'>Pagina 5</a> <br>
    <a href='cookie.php?pagina=6'>Pagina 6</a> <br>
    ";
echo "<hr/>";
	setcookie("user", "Ricardo Rubens", time()+3600);
if ( !$_COOKIE["qtd"] ){
	setcookie("qtd", 1, time()+3600);
}else{
	setcookie("qtd", $_COOKIE["qtd"] + 1,time()+3600);
}
echo "Quantidade de acessos total: <br/>";
// Ver todos os cookies
print $_COOKIE["qtd"];
switch ($pagina) {
    case '1':
        setcookie("Pagina", time()+3600);
        if (empty($_COOKIE["pg1"])){
            setcookie("pg1", 1, time()+3600);
        }else{
            setcookie("pg1", $_COOKIE["pg1"] + 1,time()+3600);
        }
        echo "<br>Quantidade de acessos na Pagina 1: <br/>";
        print $_COOKIE["pg1"];
        break;
    case '2':
        setcookie("Pagina2", time()+3600);
        if ( empty($_COOKIE["pg2"])){
            setcookie("pg2", 1, time()+3600);
        }else{
            setcookie("pg2", $_COOKIE["pg2"] + 1,time()+3600);
        }
        echo "<br>Quantidade de acessos na Pagina 2: <br/>";
        print $_COOKIE["pg2"];
        break;
    case '3':
        setcookie("Pagina3", time()+3600);
        if (empty($_COOKIE["pg3"])){
            setcookie("pg3", 1, time()+3600);
        }else{
            setcookie("pg3", $_COOKIE["pg3"] + 1,time()+3600);
        }
        echo "<br>Quantidade de acessos na Pagina 3: <br/>";
        print $_COOKIE["pg3"];
        break;
    case '4':
        setcookie("Pagina4", time()+3600);
        if (empty($_COOKIE["pg4"])){
            setcookie("pg4", 1, time()+3600);
        }else{
            setcookie("pg4", $_COOKIE["pg4"] + 1,time()+3600);
        }
        echo "<br>Quantidade de acessos na Pagina 4: <br/>";
        print $_COOKIE["pg4"];
        break;
    case '5':
        setcookie("Pagina5", time()+3600);
        if (empty($_COOKIE["pg5"])){
            setcookie("pg5", 1, time()+3600);
        }else{
            setcookie("pg5", $_COOKIE["pg5"] + 1,time()+3600);
        }
        echo "<br>Quantidade de acessos na Pagina 5: <br/>";
        print $_COOKIE["pg5"];
        break;
    case '6':
        setcookie("Pagina6", time()+3600);
        if (empty($_COOKIE["pg6"])){
            setcookie("pg6", 1, time()+3600);
        }else{
            setcookie("pg6", $_COOKIE["pg6"] + 1,time()+3600);
        }
        echo "<br>Quantidade de acessos na Pagina 6: <br/>";
        print $_COOKIE["pg6"];
        break;
}
}
definirCookie($pagina);
?>
