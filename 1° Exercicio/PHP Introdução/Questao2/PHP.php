
        <?php 

        $altura = $_GET['altura'];
        $sexo = $_GET['sexo'];
        $peso;
        
        if($sexo === 'm'){
            $peso = ((72.7 * $altura) - 58);
            echo 'o peso ideal é: ' ;
            echo $peso;
            
        }

        if($sexo === 'f'){
            $peso = ((62.1 * $altura) - 44.7);
            echo 'o peso ideal é: ';
            echo $peso;
        }

        ?>