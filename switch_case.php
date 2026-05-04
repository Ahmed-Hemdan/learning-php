<?php

$mon =8; 

switch($mon){

case 1: echo "jan"; break ;
case 2: echo "feb"; break ;
case 3: echo "mar"; break ; 
case 4: echo "apr"; break ;
case 5:               // this is mean if 5 or 6 will be jun 
case 6: echo "jun"; break ;
case 7: echo "jul"; break ;
case 8: echo "aug"; break ;
case 9: echo "sep"; break ;
case 10: echo "oct"; break ;
case 11: echo "nov"; break ;
case 12: echo "dec"; break ;

default : echo "check your input ";
}

?>