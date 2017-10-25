<?php

    $servidor = "localhost";
    $usuario = "root";
    $nomebd = "festabd";

     $conexao = new PDO("mysql:host=$servidor;dbname=$nomebd", $usuario);

     $cont = 1;   
    
     $buscar = $conexao -> query("SELECT * FROM Festa WHERE data < CURDATE() ORDER BY data DESC");

        if($buscar != false){
            foreach($buscar  as $row){
                echo "<br><br><br>Usuario: ".$cont."<br>";
                echo "Nome: ".$row['nome']."<br>";
                echo "Endereço: ".$row['endereco']."<br>";
                echo "Cidade: ".$row['cidade']."<br>";
                echo "Data: ".$row['data'];
                $cont++;
            }
        
        } 
     
     ?>