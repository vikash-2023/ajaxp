<?php 

$studentid=$_POST["id"];
$conn=mysqli_connect("localhost","root","","student1");
  

$sql3="delete from stdata1 where id={$studentid}";


if(mysqli_query($conn,$sql3)){
    echo 1;
}
else{
    echo 0;
}











?>