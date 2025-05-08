<?php

echo "Lets write in the File";

// $a = fopen("myfile1","w");
// fwrite($a,"Hello Welcome to the PHP series where,");
// fwrite($a,"we are Learning How to write and read the content in file");

// fclose($a);

$a = fopen("myfile1","a");
fwrite($a,"\n Hello Welcome to the PHP series what is php??,");
?>