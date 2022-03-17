<?php
//3) What is the output of the below code in PHP?
$bar = 0;
$bar ++;
echo "<br>".$bar;

require_once ("Query.php");
$QueryBuilder->foo($bar);
echo "<br>".$bar ;
// result 1 3 1


