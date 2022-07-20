<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Little Gradebook</title>
</head>
<body>

<!-- PHP Starts----->


<?php

//Addressing Error Handling 

ini_set('dispaly_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);


//Creating Arrays

$grades = array(

	'Richard' => 95,
	'Manuel' => 82,
    'Senny' => 98,
    'Bright' => 87,
    'Bongani' => 75,
    'Rachel' => 85

);

//Printing original Arrays

print "<p>Originally the Array looks like this:<br>";

foreach($grades as $student => $grade) {


	print "$student: $grade<br>\n";
}

print "</p>";

//sorting values in reverse order

arsort($grades);

print "<p>After Sorting  the array by value using arsort(),

       the array looks like this:<br>\n";

       foreach($grades as $student => $grade){


       	print " $student: $grade<br>\n";
       }

       print "</p>";



 //sorting values in reverse order

rsort($grades);

print "<p>After Sorting  the array by value using arsort(),

       the array looks like this:<br>\n";

       foreach($grades as $student => $grade){


       	print " $student: $grade<br>\n";
       }

       print "</p>";

// Sorting by Key

       ksort($grades);

print "<p>After Sorting  the array by value using ksort(),
       
         the array looks like this:<br>\n";

         foreach($grades as $student => $grade){

         	print "$student: $grade<br>\n";
         }

         print " </p>";





















?>

<!-- PHP Ends----->

</body>
</html>