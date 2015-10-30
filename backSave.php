<?php

$q = $_REQUEST["q"];

$myfile = fopen("backSave.txt", "w") or die("Unable to open file!");
$txt = $_REQUEST["q"];
fwrite($myfile, $txt);
fclose($myfile);

?>  
