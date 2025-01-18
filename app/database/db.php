<?php require "connect.php";

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    exit();
}

//function getAll(){
//    global $connect;
//    $sql = "SELECT * FROM users";
//    $query = $connect->prepare($sql);
//    $query->execute();
//    return $query->fetchAll();
//}
//
//$result = getAll();
//echo '<pre>';
//print_r($result);
//echo '</pre>';