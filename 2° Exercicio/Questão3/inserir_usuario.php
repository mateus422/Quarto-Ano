<?php
echo"<!DOCTYPE html><html lang='pt-br'><head><meta charset='utf-8'></head><body>";
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$servidor = "localhost";
$usuario = "root";
$nomebd = "cadastroBD";
$tabela= "CREATE TABLE usuarios (
nome VARCHAR(100) NOT NULL,
matricula INT(10) NOT NULL,
email VARCHAR(100) NOT NULL,
telefone BIGINT(11) NOT NULL,
senha VARCHAR(32) NOT NULL)";
$inserir = "INSERT INTO usuarios(nome,matricula,email,telefone,senha) VALUES ('$nome','$matricula','$email','$telefone','$senha');";
function conectarBD(){//conecta ao bd
	global $nomebd, $servidor, $usuario,$erro;
	try {
		$conexao = new PDO("mysql:dbname=$nomebd;host=$servidor", $usuario,'');
	    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Banco conectado com sucesso!<br>"; 
	} catch(PDOException $e){
	   	echo "Conexão falhou: " . $e->getMessage()."<br>";
	   	$erro = true;//uma variavel que indica o erro na conexão
	}
}
function criarBD(){//cria o bd caso ele não exista
	global $nomebd, $servidor, $usuario,$erro;
	try {
		$conexao = new PDO("mysql:host=$servidor", $usuario);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = 'CREATE DATABASE cadastroBD';
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
		$conexao = new PDO("mysql:dbname=$nomebd;host=$servidor", $usuario);
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
		$conexao = new PDO("mysql:dbname=$nomebd;host=$servidor", $usuario);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexao->exec($tabela);
		echo "Tabela criada com sucesso!<br>";
	} catch(PDOException $e){
	    echo $e->getMessage()."<br>";
	}
}


function delete($nome){
    $sql = "DELETE FROM TABELA WHERE nome = $nome";
    $stmt = (banco).prepare($sql);
    $stmt -> execute();
    return $stmt -> fetch();
    
}

function update($nome){
    $sql = "UPDATE FROM TABELA WHERE nome = $nome";
    $stmt = (banco).prepare($sql);
    $stmt -> execute();
    return $stmt -> fetch();
    
}



function Cadastro(){
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
Cadastro();
$conexao=null;
echo "<div> <button class='button' onClick=location.href='Cadastro.html'><span>Voltar ao início</span></button></div></body></html>";