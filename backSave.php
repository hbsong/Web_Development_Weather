<?php

$q = $_REQUEST["q"];

if (strpos($q,'Beijing') !== false) {
    $myfile = fopen("backSave.txt", "w") or die("Unable to open file!");;
} else {
	$myfile = fopen("backSave.txt", "a") or die("Unable to open file!");
}

$txt = $_REQUEST["q"];
fwrite($myfile, $txt . "\n");
fclose($myfile);

?>  
