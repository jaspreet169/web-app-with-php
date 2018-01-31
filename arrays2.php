<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Associative Arrays</title>
  </head>
  <body>
	<?php
		$person = array("first_name"=>"Pritesh", "last_name"=>"Patel");
		
		// change a key
		$person["first_name"] = "David";

		// add a key 
		$person["program"] = "MADT";
		$person["hasCar"] = TRUE;
		$person["friends"] = array("Emad", "Jenelle", "Marc");
		$person["pets"] = array("dogs"=>2, "cats"=>1);
		// delete something from array
		unset($person["program"]);
		
		// print entire array to screen
		print_r($person);
		echo "<br />";
		
		//print his first_name
		echo $person["first_name"];
		echo "<br />";
		
		//print marc
		echo $person["friends"][2];
		echo "<br />";
		
		// print the number of cats 
		echo "Cats? ". $person["pets"]["cats"];
		
		
		
		$tim = array("STORE"=>"Tim Hortons", "Address"=> "2075 Sheppard Avenue","Employees "=>" 25");
		print_r ($tim);
		$tim["product"] = array("French Vanilla"=>3.50, "Donut"=>1.50);
		print_r ($tim);
		
		echo "<br>";
		 echo "<h1> STORE : " . $tim["STORE"] ."</h1>";
		  echo "<h2> Address :" . $tim["Address"] ."</h2>";
		  
		  echo "<b> Best selling items : ";
		  echo "Donut</b>";
		  
		  
		   echo "<br/>";
		  // calculating revenue
		  $donut = 5140 +  $tim["product"]["Donut"];
		  echo $donut;
		
		 // profit
		  $cost  = $tim["Employees"] * 40 *15;
		  echo $cost;
		  
		  
		
		
	?>
  </body>
</html>


