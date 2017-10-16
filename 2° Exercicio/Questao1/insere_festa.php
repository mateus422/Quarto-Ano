<?php
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$cidade=$_POST['cidade'];
$data=$_POST['data'];
$servidor = "localhost";
$usuario = "root";
$nomebd = "festabd";
$tabela= "CREATE TABLE Festa (
idfesta INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
endereco VARCHAR(500) NOT NULL,
cidade VARCHAR(30) NOT NULL,
data DATE NOT NULL)";
$inserir="INSERT INTO Festa(nome,endereco,cidade,data) VALUES ('$nome','$endereco','$cidade','$data');";
$erro = false;
function conectarBD(){//conecta ao bd
	global $nomebd, $servidor, $usuario,$erro;
	try {
		$conexao = new PDO("mysql:dbname=$nomebd;host=$servidor", $usuario,'');
	    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Banco conectado com sucesso!<br>"; 
	} catch(PDOException $e){
	   	echo "Conexão falhou: " . $e->getMessage()."<br>";
	   	//print_r($conexao->errorInfo());
	   	$erro = true;//uma variavel que indica o erro na conexão
	}
}
function criarBD(){//cria o bd caso ele não exista
	global $nomebd, $servidor, $usuario,$erro,$sql;
	try {
		$conexao = new PDO("mysql:host=$servidor", $usuario);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = 'CREATE DATABASE FestaBD';
	   	$conexao->exec($sql);
	    echo "Banco de dados criado com sucesso!<br>";
	    $erro=false;
	} catch(PDOException $e){
	    echo $e->getMessage()."<br>";
	}
}
function inserirDados(){//insere os dados
	global $nomebd, $servidor, $usuario,$erro,$inserir;
	try {
		$conexao = new PDO("mysql:dbname=FestaBD;host=$servidor", $usuario);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexao->exec($inserir);
		echo "Dados inseridos com sucesso!";
		$erro=false;
	} catch(PDOException $e){
	    echo $e->getMessage()."<br>";
	    $erro=true;
	}
}
function criarTabela(){//cria a tabela
	global $nomebd, $servidor, $usuario,$erro,$tabela;
	try {
		$conexao = new PDO("mysql:dbname=FestaBD;host=$servidor", $usuario);
		if ($erro) {
			$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexao->exec($tabela);
			echo "Tabela criada com sucesso!<br>";
		}
	} catch(PDOException $e){
	    echo $e->getMessage()."<br>";
	}
}
function Festa(){
	global $erro;
	conectarBD();
	if ($erro) {
		criarBD();
	}
	inserirDados();
	if ($erro) {
	criarTabela();
	inserirDados();
	}
}
Festa();
$conexao=null;
//Crie insere_festa.php que recebe os dados enviados pelo formulário  e insere na tabela festa