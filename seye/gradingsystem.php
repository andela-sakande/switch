<?php


function gradesystem ($score) {

if (($score < 100) && ($score > 75)) print "student got an A" ;
else if (($score < 75) && ($score > 60)) print "student got a B" ;
else if (($score < 60) && ($score > 50)) print "student got a C ";
else if (($score < 50) && ($score > 40)) print "student got a D";
else print  "you got an F" ;


}
  
  gradesystem (65);


?>