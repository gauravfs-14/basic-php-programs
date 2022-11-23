<!-- WAP to display largest and smallest number from array of 10 elements  -->

<?php

$arr = [100,25,54,62,645,15,2313,515,5641,564];
$large = $arr[0];
$small = $arr[0];

for($i = 1; $i < count($arr); $i++){
    if($large < $arr[$i]){
        $large = $arr[$i];
    }
    if($small > $arr[$i]){
        $small = $arr[$i];
    }
}

echo "largest: $large <br> smallest: $small ";

?>