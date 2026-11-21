<?php
$var = 'ten';
echo "var is $var <br />";

echo gettype($var);
echo "<hr />";

$var = 20 < 50;

echo "var is $var <br />";
echo gettype($var);

echo "<hr />";

$arr = array(25,50,10,5,"Kevin",True,250);

//array
echo $arr[1];
echo "<br />";
echo gettype($arr);

?>