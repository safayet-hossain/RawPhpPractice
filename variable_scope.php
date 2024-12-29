<?php
 $x=2; 
 $y=3;
 $z=$x+$y;
 $sub=$y-$x;
 
function sum(){
   global $x,$y,$z;
   echo "Sum of the function is $z<br>" ;
}
sum();


function sub(){
    
    global $sub;
   echo "subtraction of the function is $sub <br>";
}
sub();
?>