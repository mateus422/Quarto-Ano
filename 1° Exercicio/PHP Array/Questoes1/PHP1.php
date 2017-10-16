
    <?php
    
     $marca[1] = $_GET['marca1'];
     $marca[2] = $_GET['marca2'];
     $marca[3] = $_GET['marca3'];
     $marca[4] = $_GET['marca4'];
     $marca[5] = $_GET['marca5'];
     $marca[6] = $_GET['marca6'];
     $marca[7] = $_GET['marca7'];
     $marca[8] = $_GET['marca8'];
     $marca[9] = $_GET['marca9'];
     $marca[10] = $_GET['marca10'];

     $consumo[1] = $_GET['consumo1'];
     $consumo[2] = $_GET['consumo2'];
     $consumo[3] = $_GET['consumo3'];
     $consumo[4] = $_GET['consumo4'];
     $consumo[5] = $_GET['consumo5'];
     $consumo[6] = $_GET['consumo6'];
     $consumo[7] = $_GET['consumo7'];
     $consumo[8] = $_GET['consumo8'];
     $consumo[9] = $_GET['consumo9'];
     $consumo[10] = $_GET['consumo10'];
        
   
     $carros["$marca[1]"] = $consumo[1];
     $carros["$marca[2]"] = $consumo[2];
     $carros["$marca[3]"] = $consumo[3];
     $carros["$marca[4]"] = $consumo[4];
     $carros["$marca[5]"] = $consumo[5];
     $carros["$marca[6]"] = $consumo[6];
     $carros["$marca[7]"] = $consumo[7];
     $carros["$marca[8]"] = $consumo[8];
     $carros["$marca[9]"] = $consumo[9];
     $carros["$marca[10]"] = $consumo[10];

        
        echo "<h1>Lista de carros</h1>";
     foreach ($carros as $valor => $var){
        echo "<table  >";
        if($var >= 13){
            echo "<tr >"."<td>".$valor."</td>"."<td style='color:red;'>".$var."</td>"."</tr>"."<br>";}
        else{
            echo "<tr >"."<td>".$valor."</td>"."<td>".$var."</td>"."</tr>"."<br>";
        }
        echo "</table>";
    }


?>