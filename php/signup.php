<?php
include_once("connection.php");
if (isset($_POST["signupbtn"])){
    $fname = $_POST["firstname"];
    echo "Welcome ".$fname;
}
?>