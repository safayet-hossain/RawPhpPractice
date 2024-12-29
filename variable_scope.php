<?php
 $x=2; 
 $y=3;
 $z=$x+$y;
function sum(){
   global $x,$y,$z;
   echo "Sum of the function is $z";
}
sum();
?>