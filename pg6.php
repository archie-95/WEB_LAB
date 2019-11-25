<?php
echo"<h3>REfresh page</h3>";
$name="content.txt";
$file=fopen($name,"r");
$hits=fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file=fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print("the total no of Hits are".$hits[0]);
?>
