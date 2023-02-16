<?php
try{
    $db = new PDO("mysql:hostname=localhost;dbname=B727374unibc","root","");
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "Connection Successful!<br>";
}catch(PDOException $e){
    echo $e->getMessage();
}
