
        <?php 

    $matriz = array(
     0 => [50, 35, 44],
     1 => [25, 11, 32],
     2 => [53, 95, 78]
 );


    foreach ($matriz as $valor1){
       foreach ($valor1 as $valor2){
           if ($valor2 === min($matriz[0])) { 
               echo '<b>', $valor2, ' </b>';
           }
           
           if ($valor2 === min($matriz[1])) { 
               echo '<b>', $valor2, ' </b>';
           } 
           
           if ($valor2 === min($matriz[2])) { 
               echo '<b>', $valor2, ' </b>';
           } 
           
           elseif ($valor2 != min($matriz[0]) and  $valor2 != min($matriz[1]) and $valor2 != min($matriz[2])) {
              echo $valor2,' '; 
           }
       }
       echo '<br/>';
   }

    

        ?>