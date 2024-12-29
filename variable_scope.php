<?php
 $x=2; 
 $y=3;
 $bappy=$x+$y;
 $sub=$y-$x;
 $rony=$bappy * $sub;
 $taka=$rony / $bappy;
 
function sum(){
   global $x,$y,$bappy;
   echo "Sum of the function is $bappy<br>" ;
}
sum();


function sub(){
    
    global $sub;
   echo "subtraction of the function is $sub <br>";
}
sub();

function mal(){
    global $rony;
    echo "Rony bro boleche $rony ta mal ante<br>";

}
mal();

function dorbesh(){
    global $taka;
    ECHO "dorbesher share $taka % shob project ei";
}
dorbesh();
?>