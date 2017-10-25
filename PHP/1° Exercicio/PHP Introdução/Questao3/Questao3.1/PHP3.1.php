
        <?php 

        $custoFabrica = $_GET['custo'];
        $custoRevendedor = $custoFabrica * 0.20;
        $custoImpostos = $custoFabrica * 0.45;
      
        $valorTotal = $custoFabrica + custoRevendedor + $custoImpostos;
        

        echo "O custo de fabrica é: ".$custoFabrica;
        echo "</br>O custo de revendedor é: ".$custoRevendedor;
        echo "</br>O custo de impostos é: ".$custoImpostos;
        echo "</br>O valor total é: ".$valorTotal;
    
        ?>