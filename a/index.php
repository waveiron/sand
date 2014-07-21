<html>
<?php 

// // $a = 2.222;
// // echo $a . '<br>';
// // settype($a, 'string');
// // echo $a . '<br>';
// // settype($a, 'integer');
// // echo $a . '<br>';
// // settype($a, 'float');
// // echo $a . '<br>';
// // settype($a, 'bool');
// // echo $a . '<br>';
// // settype($a, 'bool');
// // echo $a . '<br>';

// // $a = 2.1;
// // echo (string) $a . '<br>';
// // echo $a . '<br>';
// // echo (int) $a . '<br>';
// // echo $a . '<br>';
// // echo (boolean) $a . '<br>';
// // echo (int) $a . '<br>';
// // echo $a . '<br>';

// // $a = 'asdf';
// // settype($a, 'int');
// // echo $a . '<br>';
// // $a = $b = $c = 1;
// // echo $a . '<br>';
// // echo $b . '<br>';
// // echo $c . '<br>';


// // $a = 1;
// // echo $a++ . '<br>';
// // echo $a . '<br>';
// // $b = 1;
// // echo ++$b . '<br>';

// // $a = 2;
// // $b = 3;
// // echo (($a < 3) && ($b > 1) ). '<br>';
// // echo (($a>1) || ($b > 8)) . '<br>';
// // echo 1 . 'adf';

// $radius = 4;

// $diameter = $radius * 2;
// $circumference= M_PI * $diameter;
// $area = M_PI * pow($radius, 2);

// echo $diameter.'<br>';
// echo $circumference.'<br>';
// echo $area.'<br>';

// if (1<2) {
// 	echo 'one is less than two' . '<br>';
// }

// if (1<2 && 2<3) {
// 	echo "one is less than two!" . '<br>';
// }

// $username = '3';
// $password = 'asdf';
// if (gettype((int)$username) === 'string' && gettype($password) == 'string') {
	
// 	echo 'this user is a good boy<br>';
// }else {
// 		echo 'this user is not that perfect! <br>';
// 	}



// if ($username == '1') {
// 	echo '1 <br>';
// } elseif ($username == '2') {
// 	echo '2 <br>';
// } elseif ($username == '3') {
// 	echo '3 <br>';
// } elseif ($username == '4') {
// 	echo '4 <br>';
// } else {
// 	echo 'unknow';
// }

// $username = 'lisa';


// switch ($username) {
// 	case $username == 'lisa': 
// 	$user1 = 'lisa';
// 	echo $username . '<br>';
// 	case 'lisa':
// 	echo "hi, $username";
// 	break;
// 	case 'a': echo "hi, $username";
// 	break;
// 	defualt: echo 'default print';
// }

// $plenty = 'we got plenty wedget to start!';
// $few = 'we got few wedgit to start!';
// $widgets = 23;
// echo ($widgets < 7) ? $plenty : $few;

// $a = 0;
// echo ($a < 0 && $a != 1) ? 'it\'s smaller than 0 and not equals to one' : 'well it\' bigger than 0'; 



// $hour = date( "G" );
// $year = date( "Y" );
// if ( $hour >= 5 && $hour < 12 ) {
// echo "<h1>Good morning!</h1>";
// } elseif ( $hour >= 12 && $hour < 18 ) {
// echo "<h1>Good afternoon!</h1>";
// } elseif ( $hour >= 18 && $hour < 22 ) {
// 	echo "<h1>Good evening!</h1>";
// } else {
// echo "<h1>Good night!</h1>";
// }
// $leapYear = false;
// if ( ( ( $year % 4 == 0 ) && ( $year % 100 != 0 ) ) || ( $year % 400 == 0 ) )
// $leapYear = true;
// echo "<p>Did you know that $year is" . ( $leapYear ? "" : " not" ) . " a leap
// year?</p>";
// 	$pie = 100;

// do {

// 	echo '<h2>good morning!</h2>';
// 		if ($pie <= 1 && $pie > 0) {
// 			echo "<h2>there is only $pie pie left.</h2>";
// 			$pie--;
// 	} elseif ($pie <= 0) {
// 		echo "<h2>Sorry, we've sold out.</h2>";
// 		$pie--;
// 	}

// 	else{
		
// 		echo "<h2>there are $pie pies left.</h2>";
// 		$pie--;
// 	}
// } while ($pie >= 0);


// for ($i = 1; $i < 10; $i++) {
// 	echo "I'm $i";
// }

// $a = 1;
// function test() {
// 	global $a;
// 	echo $a;
// }

// test();
// $a = time() - 1;
// while ($a < time()) {
// 	echo "time stamp is";
// }

// $a = 0;
// while (1) {
// 	echo "i'm $a. ";
// 	$a++;
// 	if ($a == 1000) break;
// }

// $randomNumber = rand( 1, 1000 );
// for ( $i=1; $i < = 1000; $i++ ) {
// if ( $i == $randomNumber ) {
// echo “Hooray! I guessed the random number. It was: $i < br / > ”;
// break;
// }
// }
// $age['kim'] = 12;
// echo "kim's age is {$age['kim']}.";

// $a = 'hello';
// echo substr($a, 0, 4) . '<br>';
// echo strstr($a, 'e', true);

// $b = array(
// 	'a' => 'A',
// 	'b' => 'B',
// 	'c' => 'C',
// 	);
// echo $b['a'].'<br>';

// print_r(array_slice($b, 1, 3)).'<br>';
// echo count($b).'<br>';

// $c = array(
// 		'a' => 'A',
// 		'a' => 'B'
// 		);

// print_r($c);


$a = array(
			'a' => 'A',
			'b' => 'B',
			'c' => 'C',
			'd' => array(
				'a' => 'A',
				'b' => 'B',
				'c' => 'C'
				)
	);

// print_r($a).'<br>';
// echo current($a).'<br>';
// echo key($a).'<br>';
// echo next($a).'<br>';
// echo prev($a).'<br>';
// echo end($a).'<br>';
// each($a);
// echo current($a).'<br>';


//  Multi-dementional Source Array
$tmpArray = array(
    array("one", array(1, 2, 3)),
    array("two", array(4, 5, 6)),
    array("three", array(
            7,
            8,
            array("four", 9, 10)
    ))
);

 Output array
displayArrayRecursively($tmpArray);

/**
 * Recursive function to display members of array with indentation
 *
 * @param array $arr Array to process
 * @param string $indent indentation string
 */
function displayArrayRecursively($arr, $indent='') {
    if ($arr) {
        foreach ($arr as $value) {
            if (is_array($value)) {
                //
                displayArrayRecursively($value, $indent . '--');
            } else {
                //  Output
                echo "$indent $value \n";
            }
        }
    }
}



$a = array(
		array(
			'a' => 'A',
			'b' => 'B',
			'c' => 'C',
			'd' => 'D'
			)
		array(
			'aa' => 'AA',
			'bb' => 'BB',
			'cc' => 'CC',
			'dd' => 'DD'
			)
		)


foreach($a as $val) {
	if (is_array($a)) {
		foreach
	}
}







?>


















































</html>