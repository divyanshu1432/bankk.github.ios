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

input{width: 280px; border-bottom:5px solid  #b83369; margin-top: 150px; border-right-style: none; border-left-style: none;
border-top-style: none; font-size: 25PX; text-align: center; outline:  none;}



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
</div></nav>



<div class="container">
<form action="" method="POST">
<div class="row text-center">
<div class="col-xl-6 col-lg-6 col-md-12 col-12">
    <input type="text" name="accountno" placeholder="ACCOUNT NUMBER" autocomplete="off" autofocus required>

</div>

<div class="col-xl-6 col-lg-6 col-md-12 col-12">
<input style="margin-left:0px;" type="text" name="adhaar" placeholder="ADHAAR NUMBER" maxlength="16" minlength="16"  autocomplete="off" autofocus required>
</div>
</div>
<div class="container">

<div class="row  text-center">

<div class="col-xl-6 col-lg-6 col-md-12 col-12">
<input style="margin-left:0px;" type="text" name="pan" placeholder="PAN NUMBER" maxlength="16" minlength="16"  autocomplete="off" autofocus required>

</div>


<div class="col-xl-6 col-lg-6 col-md-12 col-12">
<input style="margin-left:0px;" type="text" name="mob" placeholder="MOBILE NUMBER" maxlength="13" minlength="10"  autocomplete="off" autofocus required>

</div>



</div>

<div class="container text-center" >
<input style="color: #fff; background:#b83369; margin-top: 50px;" type="submit" class="btn btn-xl" name="submit">
</div>
</div>

</form>
<?php 

if(isset($_POST['submit'])){

include "connection.php";

error_reporting(0);

if(isset($_POST['pan']))
{
  $x = $_POST['pan'];
}else
{
?>
<script type=""> alert("fill pan card ") </script>

<?php

}




$upsate = "UPDATE `saving account` SET `Adhaar no.` = '$_POST[adhaar]' , `Pan card No.` = '$x' , `Mobile no.` = '$_POST[mob]' WHERE `account numbrr` = '$_POST[accountno]'";

$res =  mysqli_query($con , $upsate);


if($res){

echo " succsesfull ";
}else{


echo 'wrong Account number';



}




}





?>

















</body></html>