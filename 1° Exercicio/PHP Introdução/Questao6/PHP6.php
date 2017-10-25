
    <?php
    
    $red = $_GET['red'];    
    $green = $_GET['green'];
    
    for($i = 0; $i <= 255; $i+=5){
        echo "<div style='background-color:rgb($red,$green,$i); heigth:100px; width:100px;margin-bottom:40px;color:transparent;'>
        ola mundo!</div>";
    }
?>