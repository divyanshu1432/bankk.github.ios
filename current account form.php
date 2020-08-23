<?php

session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Current accounts</title>


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


	<nav style="background: #b83369;" class="navbar navbar-expand-lg navbar-light  w-100"> 
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

<a href="#" class="btn btn-primary btn-lg" id="login"> Log in </a>

<ul class="col " style="height: 150px; width: 135px; margin-right: 35px; ">
	
<li> <a style="color: #ddd;" href="#" ><h6> Admin log in </h6></a></li>
 <hr>
<li> <a href="#" style="color: #ddd; " > <h6> costumer log in </h6></a></li>
</ul></div>
 </div> </nav>


<div class="wrapper">

<img style="transform: translate(110% , 30%); opacity: .3; position: fixed;" src="https://lofrev.net/wp-content/photos/2014/09/A-logo.png" width="400px" height="400px">
 <h3 style="text-align: center; margin-top: px; margin-top: 30px;"> (Application Form for Current Account)</h3>


<div class="container mt-5">
          <form style="" class="form-group" action="" method="POST" enctype="multipart/form-data" > 

          <label> Industry name </label>
<input class="form-control" type="text" name="Industry" id="Industry" autofocus autocomplete="off" required >
<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>
<div class="name"> </div>



<label> Owner Name</label>

<input class="form-control" type="text" name="owner_name" id="owner_name" autofocus autocomplete="off" required >

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>

<div class="Ownerr"> </div>




<label> Owner Date of Birth</label>

<input class="form-control" type="date" name="dob" id="dob" placeholder="dd/mm/yyyy" autocomplete="off" required>

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>


<label class="mt-2"> Gender </label>
<input type="radio" name="gender" value="male" id="male" required> <label for="male"> Male </label>    <input type="radio" name="gender" value="female" required id="female">  <label for="female"> female </label>

<br>


<label class="mt-2"> Email-Id</label>
<input class="form-control" type="email" name="Email-Id" id="Email-Id" placeholder="example@gmail.com" autocomplete="off" required>

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>

<br>
<label class="mt-2"> Adhaar no.</label>
<input class="form-control" type="text" name="adhaar" id="adhaar" maxlength="16" minlength="16" autocomplete="off"  placeholder="*****************">

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>

<label> Pan card No.</label>

<input class="form-control" type="text" name="Pan" id="Pan" maxlength="10" minlength="10" autocomplete="off"  placeholder="*****************">

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>
<br>


<label class="mt-2"> Tin no.</label>
<input class="form-control" type="text" name="tin" id="tin" placeholder="tin number" autocomplete="off" required>

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>
<br>




<label class="mt-2"> Gst no.</label>
<input class="form-control" type="text" id="Gst" name="gst" placeholder="Gst number" autocomplete="off" required>

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>



<br>
<label>  Address </label>

<textarea class="form-control" id="Address" name="Address" autocomplete="off" required>  </textarea>

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>



<label> Mobile no.</label>
<input class="form-control" type="text" id="Mobile" name="Mobile" placeholder="9687459****" autocomplete="off" >

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>

<label> Paste your image</label>

<input class="form-control" type="file" name="image"  id="Image" autocomplete="off" >

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>

<br>
<label> Industry Certificate Upload Here</label>

<input class="form-control" type="file" id="industry-certificate" name="industry-certificate" autocomplete="off" required >

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>


                          

<div class="Gaurantier" >
<h4 class="text-center mt-5" style="background: #b83369;"> <mark> Gaurantier Detail </mark> </h4>


<form class="form-group mt-3" style="width: 500px height400px; border: .5px solid #000;">
<label> Gaurantier Name </label>
<input class="form-control" type="text" name="Gaurantier" id="Gaurantier" autocomplete="off" required>

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>

<label> Gaurantier Account number</label>
<input class="form-control" type="text" id="Gaurantier_A/C" name="Gaurantier_AC"autocomplete="off" required >

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>

<label> Gaurantier Permanent Adress</label>
<input class="form-control" type="text" name="Gaurantier_Address" id="Gaurantier_Address" autocomplete="off" required >

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>

<label> Gaurantier Image</label>

<input type="file" name="Gaurantier_image" id="Gaurantier_image" autocomplete="off" >

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>




<div class="office" >
<h4 class="text-center mt-5" style="background: #b83369;"> <mark> Office use only </mark> </h4>


<form class="form-group mt-3" style="width: 500px height400px; border: .5px solid #000;">
<label> Account number </label>
<input class="form-control" type="text"  name="AC_NUMBER" disabled value="<?php $_SESSION['accountt'] = rand(100000000 , 9999999999);
echo $_SESSION['accountt']; ?>">


<label> Industry name </label>
<input class="form-control" type="text"  name="i-name" id="i-name">

<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>


<label> Account Holder name </label>
<input class="form-control" type="text"  name="AC_HOLDER" id="A/C_HOLDER" autocomplete="off" required>




<i style="float: right; margin-top: -25px; margin-right: 80px; color: green;" class="fa fa-check-square success " ></i>
<i style="float: right; margin-top: -25px; margin-right: 50px; color: red;" class="fa fa-times-circle error" ></i>

<label> Account Opening Date </label>
<input class="form-control" type="text"  name="DATE_OPENING" id="DATE_OPENING" value=" <?php 
$_SESSSION['date'] = Date('d/M/Y'); 
echo $_SESSSION['date'] ; ?> "  disabled>
<br> <br>

</div>

<div style="float: right;" claass="declare"> I have Declared as per my documents as same as in my documents <input class="ml-3" type="checkbox" id="submit" > </div>

<INPUT  type="submit" class="btn btn-xl btn-success text-center" name="submit"  value="SUBMIT DETAIL">

  </form> 





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>






<?php



if(isset($_POST['submit'])){
include 'connection.php';

#error_reporting(0);

$Industry = $_POST['Industry'];


$_SESSSION['industry'] = $Industry;
$owner = $_POST['owner_name'];
$dob = $_POST['dob'];

if (isset($_POST['gender'])) {
 
 $gender = $_POST['gender'];
}else{
  ?>
<script> alert("select gender") </script>

  <?php
}
$email = $_POST['Email-Id'];

$adhaar = $_POST['adhaar'];

$Pan = $_POST['Pan'];

$tin = $_POST['tin'];

$gst = $_POST['gst'];

$Address =$_POST['Address'];

$Mobile = $_POST['Mobile'];


#COSTUMER IMAGE ;

if(isset($_FILES['image'])){

$filename = $_FILES['image']['name'];
$filetemp = $_FILES['image']['tmp_name'];
$image = "BANKPHOTO/".$filename;
move_uploaded_file($filetemp , $image);


}else{
  ?>

<script> alert("upload phpto"); </script>
  <?php
}

#industry certificate ;


if(isset($_FILES['industry-certificate'])){

$ifilename = $_FILES['industry-certificate']['name'];
$ifiletemp = $_FILES['industry-certificate']['tmp_name'];

$industry_image = "BANKPHOTO/".$ifilename;

move_uploaded_file($ifiletemp , $industry_image);

}else{
  ?>

<script> alert("upload industry  certificate phpto"); </script>
  <?php
}

$Gaurantier = $_POST['Gaurantier'];

$Gaurantier_AC = $_POST['Gaurantier_AC'];

$Gaurantier_Address = $_POST['Gaurantier_Address'];

#Gaurantier_image ;

if(isset($_FILES['Gaurantier_image'])){

$gfilename = $_FILES['Gaurantier_image']['name'];
$gfiletemp = $_FILES['Gaurantier_image']['tmp_name'];

$gimage = 'BANKPHOTO/'.$gfilename;

move_uploaded_file($gfiletemp , $gimage);
}else{
  ?>

<script> alert("upload Gaurantier phpto");</script>
  <?php
}





$account = $_SESSION['accountt'];


$iname = $_POST['i-name'];

$AC_HOLDER = $_POST['AC_HOLDER'];


$Opening = $_SESSSION['date'];



$insert = " INSERT INTO `current account`(`Industry name`, `Owner Name`, `Owner Date of Birth`, `Gender`, `Email-Id`, `Adhaar no.`, `Pan card No.`, `Tin no.`, `Gst no.`, `industry Address`, `Mobile no.`, `Paste your image`, `Industry Certificate Upload Here`, `Gaurantier Name`, `Gaurantier Account number`, `Gaurantier Permanent Adress`, `Gaurantier Image`, `Account number`, `your Industry name`, `Account Holder name`, `opening date & time`)

 VALUES ('Industry','$owner','$dob','$gender','$email','$adhaar','$Pan','$tin','$gst','$Address','$Mobile','$image','$industry_image','$Gaurantier','$Gaurantier_AC','$Gaurantier_Address','$gimage','$account','$iname','$AC_HOLDER','$Opening') ";

$res = mysqli_query($con , $insert);


if ($res) {?>
  <script> 
alert("submitted");
  </script>
  <?php
}else
{
?>
<script> 
alert(" not submitted");
  </script>

<?php
}

header("location: set cur.php");


}





 ?>











<script> 



$(document).ready(function(){

$('#submit').click(function(){

var x = $('#Industry').val();

if(x.length == 0){

$('.error').css('visibility' , 'visible');
$('.form-control').css('border-color' , 'red');
$('.name').html('Name can not blank').css('color' , 'red');


return false;

}
else{

  $('.success').css('visibility' , 'visible');
  $('.form-control').css('border-color' , 'green');

  return false;
}

var y = $('owner_name').val();
var z = $('dob').val();
var a = $('Email-Id').val();
var b = $('adhaar').val();
var c = $('Pan').val();
var d = $('tin').val();
var e = $('gst').val();
var f = $('Address').val();
var g = $('Mobile').val();
var h = $('Image').val();
var i = $('industry-certificate').val();
var j = $('Gaurantier').val();
var k = $('Gaurantier_A/C').val();
var l = $('Gaurantier_Address').val();
var m = $('Gaurantier_image').val();

var n = $('C-A/C_NO').val();
var o = $('i-name').val();
var p = $('A/C_HOLDER').val();

if(y.length && z.length && a.length && b.length  && c.length  && d.length  && e.length && f.length && g.length && h.length && i.length && j.length && k.lengthv && l.length && m.length && n.length && o.length && p.length == 0){

$('.error').css('visibility' , 'visible');
$('.form-control').css('border-color' , 'red');



return false;

}
else{

  $('.success').css('visibility' , 'visible');
  $('.form-control').css('border-color' , 'green');

  return false;
}
})})



</script>



</body></html>