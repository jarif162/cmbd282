<?php
//basename()
$path=$_SERVER['PHP_SELF'];
echo $path."<br>";
$file=basename($path) ;
echo $file."<br>";

//dirname()
$dir=dirname($path);
echo $dir."<br>";

//copy()
copy("d6-l1-loops.php","d6-l1-loops-copy.php");

//file()
$file=file("d6-l1-loops.php");
echo "<pre>";
print_r($file);
echo "</pre>"; 

//file_exist
if(file_exists("d6-l1-loops.php")){
    echo "File exist";
}else{
    echo "File not exist";
}

echo "<br>";

//file_get_contents()
$file=file_get_contents("d6-l1-loops.php");
// echo $file;

echo "<pre>".
htmlspecialchars($file).
"</pre>";

//file_put_contents()
echo file_put_contents("d6-l1-loops.php","Hello World");



?>