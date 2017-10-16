<?php

    $servidor = "localhost";
    $usuario = "root";
    $nomebd = "festabd";

     $conexao = new PDO("mysql:host=$servidor;dbname=$nomebd", $usuario);
 
    
     $buscar = $conexao -> query("SELECT cidade, COUNT(cidade) FROM Festa GROUP BY cidade ORDER BY COUNT(cidade) DESC, cidade");

        if($buscar != false){
            foreach($buscar  as $row){
                echo "<br>Cidade: ".$row['cidade']."<br>";
                echo "Quantidade de festas na cidade: ".$row['COUNT(cidade)']."<br>";
               
            }
        
        } 
     
     ?>