<!-- WAP to sort an array  -->

<?php
 
$arr = [1,61,23,85,65,64,45,56,21,51,95];

sort($arr);

for ($i = 0; $i < count($arr); $i++){
    echo "$arr[$i] <br>";
}

?>