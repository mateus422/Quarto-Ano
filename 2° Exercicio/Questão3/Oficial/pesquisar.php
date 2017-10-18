<?php
echo"<!DOCTYPE html><html lang='pt-br'><head><meta charset='utf-8'><link rel='stylesheet' href='padrao.css' type='text/css'></head><body><div>";
$pesquisa=$_POST['pesquisa'];
$dado=$_POST['dado'];
$tabela;
$servidor = "localhost";
$usuario = "root";
$nomebd = "cadastroBD";
$primarykey;
if ($pesquisa == "lotacao"|| $pesquisa=="sigla") {
	$tabela="Departamento";
	$primarykey="lotacao";
} else{
	$tabela = "usuarios";
	$primarykey = "matricula";
}
$sql="SELECT * FROM $tabela WHERE $pesquisa='$dado' ORDER BY matricula;";
echo "<table>";
try {
	$conexao = new PDO("mysql:dbname=$nomebd;host=$servidor", $usuario,'');
	$search = $conexao->query($sql);
	foreach ($search as $row) {
		if ($pesquisa == "lotacao"|| $pesquisa=="sigla") {
			echo "<tr>";
			echo "<td>".$row['lotacao']."</td>";
			echo "<td>".$row['sigla'];
			echo "</tr>";
		} else{
			echo "<tr>";
			echo "<td>".$row['matricula']."</td>";
			echo "<td>".$row['nome']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['telefone']."</td>";
			echo "</tr>";
		}
	}
	$conexao=null; 
} catch(PDOException $e){
   	echo "Pesquisa falhou: " . $e->getMessage()."<br>";
}
echo "</table>";
$conexao=null;
echo "<button class='button' onClick=location.href='Cadastro.html'><span>Voltar ao início</span></button></div></body></html>";