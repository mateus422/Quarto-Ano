
    <?php
 
    
    $cont = 1;
    
   
    
    echo "Carro ".$cont;    
    echo '
        <form  method="get" action="">
        <label> Digite o Nome ou marca do carro <input type="text" name="marca"></label>
    
        <br><br>
		
        <label>Qual o consumo do carro ? <input type="number" name="consumo"></label>
        
        <br><br>
        
        <input type="submit" name = "enviar" value = "adicionar novo carro">
        <input type="submit" name = "enviar" value= "Enviar">
        </form> 
        
        <br>
        
        ';

            $GLOBALS['escolha'] = $_GET["enviar"];
            $marca[0] = $_GET["marca"];
            $consumo[0] = $_GET["consumo"];
        
    
    if($GLOBALS['escolha'] === 'adicionar novo carro'){
    while($GLOBALS['escolha'] != 'Enviar'){
    echo "Carro ".$cont;    
    echo '
        <form  method="get" action="">
        <label> Digite o Nome ou marca do carro <input type="text" name="marca"></label>
    
        <br><br>
		
        <label>Qual o consumo do carro ? <input type="number" name="consumo"></label>
        
        <br><br>
        
        <input type="submit" name = "enviar" value = "adicionar novo carro">
        <input type="submit" name = "enviar" value= "Enviar">
        </form> 
        
        <br>
        
        ';

        $GLOBALS['escolha'] = 'Enviar';
        
            $GLOBALS['escolha'] = $_GET["enviar"];
            $marca[$cont] = $_GET["marca"];
            $consumo[$cont] = $_GET["consumo"];
        
          $cont++; 

        
        if($GLOBALS['escolha'] === 'adicionar novo carro'){
            $GLOBALS['escolha'] = 'adicionar novo carro';
        }
    }
    }
    
    echo $marca[0];
    echo $cont;
    echo $marca[1];
    echo $marca[2];
?>