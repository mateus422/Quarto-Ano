
        <?php 

        $nota = 0;

        $alternativaQuest1 = $_GET['alternativaQuest1'];
        $alternativaQuest2 = $_GET['alternativaQuest2'];
        $alternativaQuest3 = $_GET['alternativaQuest3'];
        $alternativaQuest4 = $_GET['alternativaQuest4'];
        $alternativaQuest5 = $_GET['alternativaQuest5'];
        $alternativaQuest6 = $_GET['alternativaQuest6'];
        $alternativaQuest7 = $_GET['alternativaQuest7'];
        $alternativaQuest8 = $_GET['alternativaQuest8'];
        $alternativaQuest9 = $_GET['alternativaQuest9'];
        $alternativaQuest10 = $_GET['alternativaQuest10'];

        
     
        $respostas[1] = $alternativaQuest1;
        $respostas[2] = $alternativaQuest2;
        $respostas[3] = $alternativaQuest3;
        $respostas[4] = $alternativaQuest4;
        $respostas[5] = $alternativaQuest5;
        $respostas[6] = $alternativaQuest6;
        $respostas[7] = $alternativaQuest7;
        $respostas[8] = $alternativaQuest8;
        $respostas[9] = $alternativaQuest9;
        $respostas[10] = $alternativaQuest10;

        
        $gabarito[1] = 'V';
        $gabarito[2] = 'V';
        $gabarito[3] = 'V';
        $gabarito[4] = 'V';
        $gabarito[5] = 'V';
        $gabarito[6] = 'V';
        $gabarito[7] = 'V';
        $gabarito[8] = 'V';
        $gabarito[9] = 'V';
        $gabarito[10] = 'V';


        for ($i = 0; $i <= 10; $i++){
            if($respostas[$i] === $gabarito[$i]){
                $nota++;
            }
        }

        echo "Sua nota é: ".$nota;
            
        ?>