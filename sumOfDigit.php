<!-- WAP to calculate the sum of two digits  -->

<?php 

$a = 123;

$temp = $a;
$sum = 0;
while($a != 0){
  $rem = $a % 10;
  $sum += $rem;
  $a = intval($a /10);
}

echo $sum;
?>
