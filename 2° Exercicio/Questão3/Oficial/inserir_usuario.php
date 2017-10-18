<?php
echo"<!DOCTYPE html><html lang='pt-br'><head><meta charset='utf-8'><link rel='stylesheet' href='padrao.css' type='text/css'></head><body><div>";
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$servidor = "localhost";
$usuario = "root";
$nomebd = "cadastroBD";
$tabela= "CREATE TABLE usuarios (
id INT(9) NOT NULL AUTO_INCREMENT,
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
	    echo "<p>Banco conectado com sucesso!</p><br>"; 
	} catch(PDOException $e){
	   	echo "<p>Conexão falhou: " . $e->getMessage()."</p><br>";
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
	    echo "<p>Banco de dados criado com sucesso!</p><br>";
	    $erro=false;
	} catch(PDOException $e){
	    die "<p>Erro ao criar: ".$e->getMessage()."<br>";
	}
}
function inserirDados(){//insere os dados
	global $nomebd, $servidor, $usuario,$erro,$inserir;
	try {
		$conexao = new PDO("mysql:dbname=$nomebd;host=$servidor", $usuario);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexao->exec($inserir);
		echo "<p>Dados inseridos com sucesso!</p>";
		$erro=false;
	} catch(PDOException $e){
	    echo "<p>Erro ao inserir: ".$e->getMessage()."</p><br>";
	    $erro=true;
	}
}
function criarTabela(){//cria a tabela
	global $nomebd, $servidor, $usuario,$erro,$tabela;
	try {
		$conexao = new PDO("mysql:dbname=$nomebd;host=$servidor", $usuario);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexao->exec($tabela);
		echo "<p>Tabela criada com sucesso!</p><br>";
	} catch(PDOException $e){
	    echo "<p>Erro ao criar tabela: ".$e->getMessage()."</p><br>";
	}
}

/*Tentei fazer mas não consegui botar para rodar :/ */
/*
$id = $_POST["id"];
$act;
function delete($id){
    global $nomebd, $servidor, $usuario,$erro;
    global $id;
    $conexao = new PDO("mysql:host=$servidor", $usuario);
    
        $sql  = "DELETE FROM usuarios WHERE id = :id";
		$stmt = $conexao -> prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

 function update($id){
    global $nomebd, $servidor, $usuario,$erro;
    global $id;
    global $nome;
    global $matricula;
    global $email;
    global $telefone;
    global $senha;
     
    $conexao = new PDO("mysql:host=$servidor", $usuario);
     
        $sql  = "UPDATE Departamento SET nome = :nome, matricula = :matricula, email = :email, telefone = :telefone, senha = :senha WHERE id = :id";
        
		
        $stmt = $conexao -> prepare($sql);
		
        $stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':matricula', $matricula);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':senha', $senha);
		
        $stmt->bindParam(':id', $id);
		return $stmt->execute();
	}


    echo "
    <!--
    <table border='1' width='100%'>
    <tr>
        <th>Lotação</th>
        <th>Sigla</th>
        <th>Ações</th>
    </tr>
    -->
    ";
   
try {
  $conexao = new PDO("mysql:host=$servidor", $usuario);                 
                    $stmt = $conexao->prepare("SELECT * FROM Departamento ");
                    if ($stmt->execute()) {
                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                           echo "
                                 <!--
                                <td>".$rs->nome."</td><td>".$rs->matricula."</td><td>".$rs->email."</td><td>".$rs->telefone."</td><td>".$rs->senha."</td><td>"."<center><a href=\"$act=upd\">[Alterar]</a>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<a href=\"$act=del\">[Excluir]</a></center></td>";
                            echo "</tr>
                                     -->
                                ";
                        }
                    } else {
                        echo "Erro: Não foi possível recuperar os dados do banco de dados";
                    }
                  
                } catch (PDOException $erro) {
                    echo "Erro: ".$erro->getMessage();
                }
    


   echo " <!--</table> -->";

if ($act == "del" and $id != ""){    
    delete($id);
}
if ($act == "upd" and $id != ""){    
    update($id);
}
*/





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
echo "<button class='button' onClick=location.href='Cadastro.html'><span>Voltar ao início</span></button></div></body></html>";