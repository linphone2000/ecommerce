<?php
include 'connection.php';
try{
$sql = "CREATE DATABASE B727374unibc";
$db->exec($sql);
echo "Data base created";
}catch(PDOException $e){
    echo $e->getMessage();
}