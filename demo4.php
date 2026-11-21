<?php
$var = 5.7997;//double

echo "var is $var <br />";
echo $var . "is" . gettype($var);

echo "<hr />";
settype($var,"integer");

echo "var is $var <br />";
echo $var . "is" . gettype($var);


?>