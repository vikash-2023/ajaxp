<?php

$conn=mysqli_connect("localhost","root","","student1");

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gender=$_POST["gender"];

$sql="insert into stdata1(firstname,lastname,gender) values('{$firstname}','{$lastname}','{$gender}')";

if(mysqli_query($conn,$sql)){
    echo 1;
}
else{
    echo 0;
}






















?>