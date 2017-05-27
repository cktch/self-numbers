<?php

// preparing the array variable for the numbers.
$notSelfNumbers = array();
$allNumbers = array();

for($i=1; $i<=5000; $i++){ // let's loop the numbers between 1 to 5000
	$b=$i;
	$b= (string)$b ;
	$allNumbers[] = $i;

	$number = strlen($i); //  define the length of integer
	
	if ($number == 1){ // 1 number
		$sumOfThisNumbers = $i+$b[0];
		$notSelfNumbers[] = $sumOfThisNumbers; // sum of this 1 number
	} elseif ($number == 2){ // 2 number
		$sumOfThisNumbers = $i+$b[0]+$b[1];
		$notSelfNumbers[] = $sumOfThisNumbers; // sum of this 2 number
	} elseif ($number == 3){ // 3 number
		$sumOfThisNumbers = $i+$b[0]+$b[1]+$b[2];
		$notSelfNumbers[] = $sumOfThisNumbers; // sum of this 3 number
	} elseif ($number == 4){ // 4 number
		$sumOfThisNumbers = $i+$b[0]+$b[1]+$b[2]+$b[3];
		$notSelfNumbers[] = $sumOfThisNumbers; // sum of this 4 number
	}
}

// let's compare the numbers and find what we only need to show.
$selfNumbers = array_diff($allNumbers, $notSelfNumbers);

$sumSelfNumbers = 0;
$numbering = 1;
foreach($selfNumbers as $eachSelfNumber) {
	echo "<pre>". $numbering++ .". ".$eachSelfNumber;
	$sumSelfNumbers+= $eachSelfNumber; // count it up in this loop yeah..
}

// here is the final result and enjoy my coffee again :)
echo "<pre>Sum of all self-numbers from bigger than 1 and smaller than 5000 is: <strong>" . number_format($sumSelfNumbers)."</strong>";
 
?>