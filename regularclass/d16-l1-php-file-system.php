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

echo "<br>";

//filesize()
echo filesize("d6-l1-loops.php");
echo "<br>";

//filetype()
echo filetype("d6-l1-loops.php") ."<br>";

//is_dir()
if(is_dir("d6-l1-loops.php")){
    echo "It is a directory";
}else{
    echo "It is not a directory";
}

echo "<br>";

//is_file()
if(is_file("d6-l1-loops.php")){
    echo "It is a file";
}else{
    echo "It is not a file";
}

echo "<br>";

//is_link()
if(is_link("d6-l1-loops.php")){
    echo "It is a link";
}else{
    echo "It is not a link";
}

echo "<br>";

//link()
// $file=link("d6-l1-loops-copy.php","d6-l1-loops-copy-link.php");
// echo $file."<br>";

//unlink()
// $file=unlink("d6-l1-loops-copy.php");
// $file=unlink("d6-l1-loops-copy-link.php");
// echo $file."<br>";

//mkdir()
if(!is_dir("newdir")){
    mkdir("newdir");
}

//rmdir()
if(is_dir("newdir")){
    rmdir("newdir");
}

//move_uploaded_file() --(example-d14-l1-file-upload.php) here used for moving file from temp to destination folder

//pathinfo()
$file=pathinfo(($_SERVER["PHP_SELF"]));

echo "<pre>";
print_r($file);
echo "</pre>";


?>