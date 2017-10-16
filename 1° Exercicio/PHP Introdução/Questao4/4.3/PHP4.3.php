
        
    <?php
     $num1 = $_GET['num1'];
     
     $num2 = $_GET['num2'];

        
            $escolha = $_GET['escolha'];

                switch($escolha){
                    case 1:
                        
                        echo  "O resultado é: ".($num1 + $num2); 
                        break;
                        
                    case 2:
                        
                        echo  "O resultado é: ".($num1 - $num2); 
                        break;
                        
                    case 3:
                        
                        echo  "O resultado é: ".($num1 / $num2); 
                        break;
                        
                    case 4:
                        
                        echo  "O resultado é: ".($num1 * $num2); 
                        break;
                        
                    default:
                        echo 'Escolha uma opção válida!';
                        break;

                } 

                ?>
    