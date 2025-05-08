<?php

$a = readfile("my.txt");   // to only read file.
// echo $a;
readfile("file.html");
echo "<br>";

// fopen

$fptr = fopen("my.txt", "r");
if(!$fptr){
    die("Unable to open file.");
}
echo $fptr;
echo "<br>";

//  fread

$content = fread($fptr, filesize("my.txt"));
echo $content;
echo "<br>";

// fgets


while($a=fgets($fptr)){
echo $a;
}

echo "<br> End of The File.";

// fgetc

while($a= fgetc($fptr)){
    echo $a;

    if($a == ".")
    {
    break;  
    }
    

} 
   

?>




