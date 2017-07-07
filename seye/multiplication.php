<?php

// $n = 0;
// $num = 20;

// while ($n < 20) {
// 	$n++;

// echo "2  x ".' '  "$n" . "=" . $n * 2; 


// } 

// odd numbers between 50 and 100
// $n = 50;
// while ($n < 100);
// {
	
// 	echo $n;
// 	$n++;


 
// while($x <= 5) {
//   echo "The number is: $x ";
//   $x+2;

 $i = 0;
 //$num = 50;
         
  /*do {
      $i+=6;
      }
         
    while( $i < 20 );
   echo ("Loop stopped at i = $i " );P
*/
 
// $n = 0;
// $num = 2;

// do { echo  "2 x $n = " . $num * $n;
// $n++;

//  }
// while 
// 	($n < 20); 
// 	Multiplication by 2


// $n = 0; 
// $num = 2; 
// do {  echo  "2 x $n = " . $num * $n . "\n";  

// $n++; } 
// while ($n <= 20);
// Multiplication table of 2
// 
// 



 
class MyClass
{
  public $prop1 = "I'm a class property!";
 
  public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!' . "\n";
  }
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "\n";
  }
}
 
// Create a new object
$obj = new MyClass;
 
// Get the value of $prop1
echo $obj->getProperty();
 
// Output a message at the end of the file
echo "End of file " . "\n";
 
?>
