<?php
try{
    if(isset($x)){
        echo "x is set";
    }else{
        throw new Exception("x is not set");
    }
}catch(Exception $e){
    echo $e->getMessage(); //-> is used to access the property of the object
}finally{
    echo "<br>";
    echo "finally block";
}


?>