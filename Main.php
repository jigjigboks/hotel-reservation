<?php

$con = mysqli_connect("localhost","root","root");

if (!$con) {     
die('Could not connect: ' . mysqli_error());   
} 

mysqli_select_db($con, "db_connect");   

$txtName = $_POST["txtName"];
$txtEmail = $_POST["txtEmail"];
$txtPhone = $_POST["txtPhone"];
$txtDateIn = $_POST["txtDateIn"];
$txtDateOut = $_POST["txtDateOut"];
$txtTime = $_POST["txtTime"];
$txtPeople = $_POST["txtPeople"];

$sql = "INSERT INTO 'tabl_contact' ('Id', 'fldName', 'fldEmail', 'fldPhone', 'fldDateIn', 'fldDateOut', 'fldTime', 'fldPeople') VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtDateIn', '$txtDateOut','$txtTime','$txtPeople')";


$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "Contact Records Inserted";
}
?>