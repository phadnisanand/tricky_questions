<?php
$org = 123455355;
$rev=0;
$backOrg= $org;
while($org > 0) {
  $last = $org % 10; //4
  $rev = ( $rev * 10) + $last; // 50+4= 54, 540+3= 543
  $org= (int) ($org / 10); //1234
}
//echo 'original--'. $backOrg;
//echo '<br />';
//echo 'reverse--'. $rev;


//modulo operator
$a = 10;
$b = 3;

$result = $a % $b; // Outputs 1, because 10 divided by 3 leaves a remainder of 1
//echo $result; 
?>
<?php

function getReverseStr($str) {
		$revStr = '';
		$count = strlen($str) - 1;
		for($i = $count; $i >=0; $i--) {
				$revStr.=$str[$i];
		}
		return $revStr;
}
echo getReverseStr((string)'aaddad');