<!-- WAP to calculate the sum of even numbers up to 100  -->

<?php

$c = 0;

for ($i=1; $i <= 100; $i++) { 
    if($i % 2 == 0){
             $c+=$i;
    }
}

echo "Sum of even numbers up to 100 is $c";

?>