<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>
<body>

<h1>FILL THE FOLLOWING FORM</H1>

<form id="faram">
    <div> First Name: <input type="text" name="firstname"></div><br>
    <div>Last Name: <input type="text" name="lastname"></div><br>
    <div>gender: male<input type="radio" name="gender" value="male">female<input type="radio" name="gender" value="female"></div><br>
    <div><input type="button" id="btn" value="save"></div>
</form>


<div>
<table id="main" border="0" cellspacing="0">
    <tr>
        <td id="header"><h1>form data</h1></td>
    </tr>
    <tr>
        <td id="load-table">
            <input type="button" id="load-btn" value="load-data">
        </td>
    </tr>
    <tr>
        <td id="table-data"></td>
    </tr>
</table>




</div>



<script>
    $(document).ready(function(){
     $("#btn").click(function(){
       $.ajax({
        url:"connect.php",
        type:"POST",
        data:$("#faram").serialize(),
        success:function(data){
            if(data==1){
                $("#faram").trigger("reset");
            }

        }



       });
     });
    });



    $(document).ready(function(){
     $("#load-btn").click(function(){
     $.ajax({
     url:"sho.php",
     type:"POST",
     success:function(datum){
        $("#table-data").html(datum);
     }
     });
     });
    });


    $(document).on("click",".btn3",function(){
   var studentid=$(this).data("id");
//    alert(studentid);
  var element=this;

  $.ajax({
  url:"delete.php",
  type:"POST",
  data: {id:studentid},
  success:function(dataum){
    if(dataum==1){
        $(element).closest("tr").fadeOut();
    }
    // else{
    //     echo "no record deleted";
    // }
  }
  });
    });



</script>

    
</body>
</html>