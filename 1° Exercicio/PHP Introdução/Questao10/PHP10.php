
    <?php
   
    
    echo "<h3>Diferença entre variavel locais e globais:</h3><br>";
       echo"<h4>Variavel sendo local:</h4>"; 
        
        function local(){
            $var1 = 10;
            echo "Esse é o valor que votamos em var1: ".$var1."<br>";
        }

    local();
        echo "tentar um imprimir var1, porem ela é local: ".$var1."<br>";

     

    $GLOBALS['var2'] = 20;
    echo"<h4>Variavel sendo global:</h4>"; 
        echo "Esse é o valor que votamos em var2: ".$var2."<br>";
    

        function varglobal(){
            echo "Vai imprimir var2, porque ela é global: ".$GLOBALS['var2']."<br>";
        }

        varglobal();


echo "<h3>Variaveis estaticas:</h3><br>";
        echo"<h4>Sem usar variaveis estaticas:</h4>"; 
        
        echo "Valor impresso chamando a função 2 vezes, mas sem usar static: ";
        function naoestatica ()
        {
        $num = 0;
        echo $num;
        $num++;
        }
        naoestatica();
        naoestatica();

       echo"<h4>Usanod variaveis estaticas:</h4>";
        echo "Valor impresso chamando a função 2 vezes, mas usando static: ";
        function estatica()
        {
        static $num = 0;
         echo $num;
        $num++;
        }
        estatica();
        estatica();

echo "<h3>Contantes magicas</h3><br>";
        
    echo"<h4>__LINE__:</h4>"; 
        echo __LINE__;

    echo"<h4>__FILE__:</h4>";     
        echo __FILE__;

    echo"<h4>__DIR__:</h4>";     
        echo __DIR__;

    echo"<h4>__FUNCTION__:</h4>";     
        function imprimirFunc(){
        echo __FUNCTION__;
        }
    imprimirFunc();  

echo "<h3>Require e include:</h3><br>";
        
    echo"<h4>Include:</h4>"; 
        if(true){
            include "weweq";
            echo "<h5>vc esta vendo essa frase pq o include ele não para o script em caso de erro, diferente do Require, será visto no proximo item</h5>";
        }

   echo"<h4>Include e require once:</h4>"; 
        if(true){
            include_once "weweq";
            echo "<h5>O que acontece no include e no require, acontece aqui, porem ele vai olhar se o arquivo já foi incluido, caso sim nem mensagem de erro ele dá</h5>";
        }

    echo"<h4>Require:</h4>"; 
        if(true){
            echo "<h5>tem uma linha apos da o require, porém ela não será impressa por causa do Fatal error gerado pelo require</h5>";
            require "weweq";
            echo "Não serei impressa";
        }
    
?>