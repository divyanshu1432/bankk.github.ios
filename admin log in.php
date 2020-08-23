<?php

session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title> Official web page for admin</title>


    <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="saving account form.css">


<style > 
 label {padding: 10px; font-weight: bolder;}



.success {visibility: hidden;}
.error{visibility:  hidden;}
</style>

</head>
<body>


  <nav style="background: #b83369;" class="navbar navbar-expand-lg navbar-light sticky-top w-100"> 
    <div class="container">

<a class="navbar-brand" href="index.php"> 
<img  src="https://lofrev.net/wp-content/photos/2014/09/A-logo.png" width="80px" height="80px"> <SPAN  style="color: #fff; font-weight: bolder; font-size: 35px; font-family: 'Volkhov', serif; display: flex; flex-direction: column; margin-top: -85px; margin-left: 100px; line-height: 45px;" >  APNA BANK 
  <label style="font-weight: lighter; font-size: 30px;"> अपना बैंक</label> 
</SPAN>
</a>


 <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a style="display: flex;flex-direction: column; font-weight: bolder; font-size: 20px; color: #fff;" class="nav-link" href="index.php"> <i style="color: #fff;" class="fa fa-home fa-2x mr-5" aria-hidden="true"> </i>  Home <span class="sr-only">(current)</span></a>
      </li> </ul>


      <div class="colapse">


 </div> </nav>


<div class="wrapper">

<img style="transform: translate(110% , 30%); opacity: .1; position: fixed;" src="https://lofrev.net/wp-content/photos/2014/09/A-logo.png" width="400px" height="400px">
 <h3 style="text-align: center; margin-top: px; margin-top: 30px;"> (ONLY FOR OFFICIAL USE)</h3>
<div class="container">
<form action="" method="POST" enctype="multipart/form-data">


<label> your Id</label>
<input type="text"  name="acnumber"  class="form-control">



<label> Password</label>
<input type="password" name="password" class="form-control">

<input type="submit" class="btn btn-lg btn-block mt-5" name="submit" style="background: #b83369; color: #fff;" value="PROCEED">


</form>
</div>

</body></html>

<?php  

include "connection.php";

if(isset($_POST['submit'])){


  $costumer = $_POST['acnumber'];
  $password = $_POST['password'];
$q = "SELECT * FROM `password set saving account`  WHERE `ACCOUNT nm` = '$costumer' && `password` = '$password'";
$data = mysqli_query($con , $q);
$res = mysqli_num_rows($data);



if($res){

header('location: admin internal.php');
}
else{

  echo "not found";
}


}


?>














