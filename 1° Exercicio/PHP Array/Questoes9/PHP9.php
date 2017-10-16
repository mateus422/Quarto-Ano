
        <?php 

        $meninos['joao'] = 1.45;
        $meninos['jose'] = 1.67;
        $meninas['maria'] = 1.60;
        $meninas['madalena'] = 1.40;
        
        asort($meninos);
        asort($meninas);

        

        function quadrilha($meninos1, $meninas1){
            foreach ($meninos1 as $valor => $var){
               for($i = 0; $i < count($meninos1); $i++){
                   $valor2[i] = $valor.$var;
               }
            }
            
            foreach ($meninas1 as $valor1 =>  $var1){
               for($i = 0; $i < count($meninas1); $i++){
                   $valor3[i] = $valor1;
               }
            }
            
            for($i = 0; $i < count($meninos1); $i++){
                   echo "O casal ideal é ".$valor2[i]." com ".$valor3[i]; 
               }
            
       
            }
            

        quadrilha($meninos,$meninas);
        



        ?>