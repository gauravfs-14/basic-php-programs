<!-- WAP to display prime numbers upto 100  -->

<?php

for($i = 2; $i <=100; $i++){
    $c = 0;
    for($j = 2; $j<=$i/2; $j++){
        if($i%$j==0){
            $c++;
            break;
        }
    }
    if($c == 0){
        echo "$i <br>";
    }
}

?>