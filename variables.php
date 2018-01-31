<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Variables</title>
  </head>
  <body>
  <?php
  
  $var1 = 10;
  echo $var1;
  
  echo "<br />";
  
  $var1 = 100;
  echo $var1;
  
  echo "<br />";
  
  $var2 = "Hello ";
  echo $var2;
  
  $abc="jaspreet";
  echo $abc;
  
   echo "<br />";
   $bitcoin = 50;
    $usd= 100069.22 * $bitcoin;
	
	 echo $bitcoin." bitcoin is equal $  " . $usd;
   
   
    echo "<br />";
    $price= 166.97;
	$shares= 5.13 * 10 *10*10*10*10*10;   
	$mv = $price * $shares;
   
   $cash= 74181.00;
   $debt = 115680.00;
     $ev = $mv + $cash - $debt;
	 echo  "enterprise value is " .$ev;
  
     echo "<br />";
  
   $j= strtolower("JASPREET");
   echo $j;
   
    echo "<br />";
   
  $z= strtoupper("jaspreet");
   echo $z;
   
    echo "<br />";

    
  $y= ucfirst("kaur");
   echo $y;
  
  
  echo "<br />";

 echo ucwords("hi ali how are you");
  
  echo "<br />";

 echo strlen("i'm fine thanku");
   
  echo "<br />";

 echo trim("     A     hello      bye        ");
   
     echo "<br />";
	 
   $a = array(100,60,80,90,20);
   // things with array
    $b= $a[0]+ $a[4];
	echo $b;
	  echo "<br />";
	  
	  //modify array
	  $names = array("jim","axz","petter");
	  $names[1] = "lion";
	  echo  $names[0];
	  echo "<br>";
	  $names[0] = $names[2]."tweet";
	  echo $names[0];
	  
	   echo "<br>";
	  // mixy array 
	  $m = array(10,"facebook",  array("apple","banana"));
	  echo $m [2][1];
	  
	  
   
   
  ?>
  </body>
</html>
