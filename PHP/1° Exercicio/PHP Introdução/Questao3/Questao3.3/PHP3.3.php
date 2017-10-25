
        <?php 
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
         $Aux1 = $usuario[0];
         $Aux2 = $senha[0];
        
        if(ctype_upper($Aux2) === true){
            if(strtoupper($Aux1) === $Aux2){
                echo 'Valido';
                }
            else{
            echo "Invalido ";
            }
        }else{
            echo"Invalido";
        }
                
            
        

                ?>