<?php
$conn=mysqli_connect("localhost","root","","student1");

$sql1="select * from stdata1";
$result=mysqli_query($conn,$sql1) or die("connection failed");

$output="";

if(mysqli_num_rows($result)>0){
    $output='<table border="1" width="100%" cellspacing="0" cellpadding="10px">
    <tr>
    <th>id</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>gender</th>
    <th>delete record</th> </tr>';
    while($row=mysqli_fetch_assoc($result)){
        $output.="<tr><td>{$row["id"]}</td><td>{$row["firstname"]}</td><td>{$row["lastname"]}</td><td>{$row["gender"]}</td><td><input type='button' class='btn3' value='delete' data-id='{$row["id"]}'></td></tr>";
    }
    $output.="</table>";
    mysqli_close($conn);
    echo $output;
}
else{
    echo "record not found";
}
?>