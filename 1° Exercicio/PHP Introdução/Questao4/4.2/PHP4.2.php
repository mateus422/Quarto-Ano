<?php
     $frase = $_GET['frase'];
    
     $palavras =  explode(" ", $frase);

     $qtd_frase = str_word_count($frase);
        
    
    For($i = 0; $i <= $qtd_frase; $i++ ){
        echo $palavras[$i]."</br>";
    }
    


    ?>