<?php

echo "Today is " . date("Y-m-d h:i:sa");
echo "<br>";

$d=strtotime("+3 Months");
$today = time();

echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br>";


echo "In three months it will be: ". date("Y-m-d h:i:sa", $d);
echo "<br>";


$d2=ceil(($d-time())/60/60/24);
echo $d2;