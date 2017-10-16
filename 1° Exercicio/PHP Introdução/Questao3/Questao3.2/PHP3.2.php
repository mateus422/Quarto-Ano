
        <?php 
        // Verifica se todos os dados foram preenchidos
            if ($_SERVER["REQUEST_METHOD"]== "POST"){
                
                if(empty($_POST['nome'])){
                    echo "</br>*Nome necessario!";
                }else{
                    $GLOBALS[nome] = $_POST['nome'];
                }
                
                 if(empty($_POST['endereco'])){
                    echo "</br>*Endereco necessario!";
                }else{
                     $GLOBALS[endereco] = $_POST['endereco'];
                }
                
                 if(empty($_POST['cidade'])){
                    echo "</br>*Cidade necessaria!";
                }else{
                    $GLOBALS[cidade] = $_POST['cidade'];
                }
                
                 if(empty($_POST['estado'])){
                    echo "</br>*Estado necessario!";
                }else{
                    $GLOBALS[estado] = $_POST['estado'];
                }
                
                 if(empty($_POST['celular'])){
                    echo "</br>*Celular necessario!";
                }else{
                    $GLOBALS[celular] = $_POST['celular'];
                }
                
                 if(empty($_POST['cpf'])){
                    echo "</br>*CPF necessario!";
                }else{
                    $GLOBALS[cpf] = $_POST['cpf'];
                }
                
                 if(empty($_POST['idade'])){
                    echo "</br>*Idade necessaria!";
                }else{
                    $GLOBALS[idade] = $_POST['idade'];
                }
            }   
        
        //Verifica se idade é maior que 18
            if($idade > 18){
                echo '</br>*Idade valida!';
            }else{
                echo '</br>*Idade invalida!';
            }

        //Verifica se CPF tem exatamente 11 caracteres (sem “.” Ou “-”)
            if(count($CPF) != 11){
                echo '</br>*CPF invalido!';
            }else{
                echo '</br>*CPF valido!';
            }

        //Verifica se telefone celular começa com 8 ou 9 e tem 8 algarismos/caracteres
            if($idade[0] != 9){
                if(idade[0] != 8){
                    echo "</br>*Numero Invalido!";
                }
            }
        
        //Verifica se nome tem pelo menos duas palavras
            if(str_word_count(nome) < 2){
                echo "</br>*Nome invalido!";
            }
                
                ?>