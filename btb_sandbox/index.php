<?php 
$a = 'Kevin';
$b = 'Kean';
$c = 'March';
$d = 'Lucy';

$students = ['a','b','c','d'];
foreach($students as $seats) {
	echo $$seats . '<br>';
}