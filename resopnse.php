<?php
$data = $_GET['datavalue'];

$a = array('pune','mumbai');
$b = array('Gorakhpur','Lucknow');
$c = array('patna','kishngardh');

if($data == "Maharastra"){
    foreach($a as $aone){
        echo "<option> $aone </option>";
    }
}

if($data == "UP"){
    foreach($b as $bone){
        echo "<option> $bone </option>";
    }
}

if($data == "Bihar"){
    foreach($c as $cone){
        echo "<option> $cone </option>";
    }
}
?>