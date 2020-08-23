<?php 
session_start();

?>



<!DOCTYPE html>
<html>
<head>
  <title> SET ID & PASSWORD </title>


    <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



<style > 

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

 </div> </nav>

<div class="container">

<center class="mt-5">
   <h4> Make your password for further log in </h4>

<form  action="" method="POST" >


<label style="float: left;"> Your A/C number</label>
<input class="form-control"  value="<?php  echo $_SESSION['accounttt'] . " " .  " ". " note this is your permanent account number" ?>" disabled>
<p style="color: red;"> note this is your permanent account number you will need this future</p>

<label style="float: left;">Email-id</label>
<input class="form-control" type="text" name="email" required>


<label style="float: left;"> put your password</label>

<input class="form-control" type="text" name="password" required>


<label style="float: left;"> Confirm password</label>

<input class="form-control" type="text" name="cpassword" required>
<h4>
<input style="color: #fff; background: #b83369;" class="btn btn-block btn-warning mt-3" type="submit" name="submit" value="submit detail">
</h4>
</form>


</center></div>

<?php 

include "connection.php";

if(isset($_POST['submit'])){
  

$pass = mysqli_real_escape_string($con , $_POST['password']);

$var = password_hash($pass , PASSWORD_BCRYPT);

$x =$_SESSION['accounttt'];
$y = $_POST['password'];


$to = $_POST['email'];
$subject = "Account open in APNA BANK.";

$body = "you saving account has been opened succesfully your ACCOUNT NO IS $x and your password is $y  keep connect with APNA BANK . ";

$header = "FROM: divyanshu.8174@gmail.com";

if(mail($to , $subject , $body , $header)){
  echo "mail sent";
}else{
echo "mail did'nt send";}


$insert = " INSERT INTO `password set saving account`( `email`, `password`, `HASH PASSWORD`, `ACCOUNT nm`) VALUES ('$to','$y', '$var' ,'$x') ";

$data = mysqli_query($con , $insert);


if ($data) {

  
}




}







 ?>














</center>



</body></html>