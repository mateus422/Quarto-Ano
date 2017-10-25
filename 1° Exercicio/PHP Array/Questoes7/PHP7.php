
        <?php 

            
            function margaria($flores=array()){
                $count = 0;
                for($i = 0; $i < count($flores); $i++){
                    if($flores[$i] === 'margarida'){
                        $count++;
                    }
                }
                  echo "A quantidade de margaridas é: ".$count;
            }

                $buque[] = "rosa";
                $buque[] = "margarida";
                $buque[] = "rosa";
                $buque[] = "cravo";
                $buque[] = "rosa";
                $buque[] = "margarida";
                $buque[] = "rosa";
                $buque[] = "margarida";
                $buque[] = "cravo";
                
            margaria($buque);

        ?>