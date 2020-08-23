<?php session_start(); ?>


<!DOCTYPE! html>
	<head>
		<title> APNA BANK Education Loan</title>




    <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">


			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css2?family=Anton&family=Volkhov&display=swap" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="bank.css"/>





<style>
	
	label{font-weight: bolder!important; font-size: 20px;}

.wrapper img{   transform: translate(110% , 40%); opacity: .3; position: fixed;    }

@media (max-width: 576px){

.wrapper img{ transform: translate(0% , 40%); opacity: .3;  }

}

@media (max-width: 768px){

.wrapper img{ transform: translate(80% , 40%)!important; opacity: .3;  position: fixed; }

}


@media (max-width: 1000px){

.wrapper img{ transform: translate(85% , 50%)!important; opacity: .3;  position: fixed; }

}

</style>
                 



	</head>
	<body >
		<nav style="background: #b83369;" class="navbar navbar-expand-lg navbar-light "> 
			<div class="container">
				<a class="navbar-brand" href="index,php"> 
					<img src="https://lofrev.net/wp-content/photos/2014/09/A-logo.png" width="80px" height="80px"> <SPAN  style="color: #fff; font-weight: bolder; font-size: 35px; font-family: 'Volkhov', serif; display: flex; flex-direction: column; margin-top: -85px; margin-left: 100px; line-height: 45px;" >  APNA BANK 
					<label style="font-weight: lighter; font-size: 30px;"> अपना बैंक</label></SPAN>
				</a>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
					<a style="display: flex;flex-direction: column; font-weight: bolder; font-size: 20px; color: #fff;" class="nav-link" href="index.php"> <i style="color: #fff;" class="fa fa-home fa-2x" aria-hidden="true"> </i>  Home <span class="sr-only">(current)</span></a>									
					</li>
				</ul>
			</div>
		</nav>



<div class="wrapper">

<img style="" src="https://lofrev.net/wp-content/photos/2014/09/A-logo.png" width="400px" height="400px">
 <h3 style="text-align: center; margin-top: px; margin-top: 30px;"> (Application Form for Education loan)</h3>

<div class="container">


<form class="" action="" method="POST" enctype="multipart/form-data">

	I/We request you to grant me/us a loan facility of Rs.

							<label for="loan-amt"></label>

							

							<input  autofocus autocomplete="off" required type="tel"  id="loan-amt" name="loan-amt" value="" style="text-align: center; height:25px : border:none; border-bottom: 3px dotted black; outline: none; border-top-style: none; border-left-style: none; border-right: none;"> under Vecile Loan Scheme for (Reason)
							<label for="loan-reason"></label>
							<input  autofocus autocomplete="off" required type="text" id="loan-reason" name="loan-reason" value="" style=" text-align: center;width:200px; height:25px;">
							To enable you to consider the proposal, I/We submit the following particulars.	
					
					<p>Please complete all sections in <strong>BLOCK LETTERS</strong> and tick options wherever applicable</p><br>



 
						<h3 style="background:  #b83369; color: #fff; text-align: center;">	<mark>General Information :</mark> </h3> <br>
								<label style="text-align: left;" for="name">Name:</label>
								<input  autofocus autocomplete="off" required class="form-control" type="text" id="name" name="name" value="" style="height:24px;"><br><br>
								<label for="age">Date of birth:</label>
								<input  autofocus autocomplete="off" required class="form-control" type="date" size="4" id="age" name="age" value="" style="height:24px; text-align: center;"><br><br>


								<label for="address">Address:</label>
								<textarea  autofocus autocomplete="off" required class="form-control" type="textarea" id="address" name="address" value="" > </textarea><br><br>


								<label for="pincode">Pincode:</label>
								<input  autofocus autocomplete="off" required size="6" type="number" id="pincode" name="pincode" value="" style="height:24px;"><br><br>
							

						
							<h3 style="color: #fff; background: #b83369; text-align: center;">Personal Information :</h3> <br>

								<label for="fname">Father's Name:</label>
								<input  autofocus autocomplete="off" required class="form-control" type="text" id="fname" name="fname" value="" style="height:24px;"><br><br>

								<label for="birthday">adhaar number:</label>
								<input  autofocus autocomplete="off" required class="form-control" type="text" id="birthday" name="adhaar" value="" style="height:24px;"><br><br>

								<label for="pan">PAN no.:</label>
								<input class="form-control" type="Textarea"name="pan" value="" style="height:24px;"><br><br>


								<label for="email">E-mail:</label>
								<input  autofocus autocomplete="off" required class="form-control" type="email" id="email" name="email" value="" style="height:24px;"><br><br>
					




								<label for="mobile">Mob. No.:</label>
								<input  autofocus autocomplete="off" required class="form-control" type="tel" id="mobile" name="mobile" value="" style="height:24px;"><br>

								<label for="gender">Gender:</label>
								<input  autofocus autocomplete="off" required type="radio"  name="gender" value="male" id="male"> <label for="male" > Male </label>
								<input type="radio"name="gender" id="female" value="female"> <label for="female"> female </label> 
								<input  autofocus autocomplete="off" required type="radio" name="gender" value="other" id="other"> <label for="other"> Other </label> <br>

<br>
								

<label> Your image </label> 
<input type="file" name="image" >

<br><br>
								<label for="marriage">Recently passed class/course:</label> <br>

								<input  autofocus autocomplete="off" required class="form-control" type="text" name="passed_exam">

								<label for="employment"> year of passing :</label>
								

<select class="form-control" name="fyear"> 
<?php for($i=1980; $i<2020; $i++){
 echo "<option> $i </option>.";
} ?></select>



								<br> <br>


<h3 style="background: #b83369; color: #fff; text-align: center; ">  <mark >Important Information :</mark> </h3> <br>
								<label for="vechile">Type of Study:</label> <br> <br>
								<input  autofocus autocomplete="off" required type="radio" id="vechile" name="Education" value="male"> Engineering .
								<input  autofocus autocomplete="off" required type="radio"id="Education" name="Education" value="female"> Medical.
								<input  autofocus autocomplete="off" required type="radio"id="Education" name="Education" value="other">  Competition. <br><br>

								<label for="model name">College/Institute Name:</label> 
								<input  autofocus autocomplete="off" required class="form-control" type="text" id="model name" name="college_name" value="" style="height:24px;"><br><br>

								<label for="model no.">College ref No:</label> 
								<input  autofocus autocomplete="off" required class="form-control" type="textarea" id="model no." name="college_no" value="" style="height:24px;"><br><br>
								<label for="dl">college address :</label> 
								<textarea class="form-control" type="textarea" id="dl" name="caddress" value="" style=""> </textarea><br><br>
								<label for="dealer name">Name of Student:</label> 
								<input  autofocus autocomplete="off" required class="form-control"  type="text" id="dealer name" name="student_name" value="" style="height:24px;"><br><br>






<h3 style="background: #b83369; color: #ffff; text-align: center;"> <mark > Loan information. </mark></h3>

<label> Ammount </label>

<input type="text" name="loan_ammount" class="form-control" placeholder="loan Ammount">

<br> <br>

<label>Account number </label>
<input  autofocus autocomplete="off" required style="color: red" disabled type="text" name="acnt" class="form-control" value=" <?php $_session['x'] = rand(10000 , 99999); echo 'account number will be on next page it aumatic';  ?> ">

<br> <br>
<label> Loan date :</label>

<input  autofocus autocomplete="off" required style="margin-left:65px; width:  150px;" type="date" name="loan_date">
<br> <br>

<label> loan ending date : </label>

<input  autofocus autocomplete="off" required style="width:  150px;" type="date" name="end_date">

<br> <br>
<label> Rate%</label>

<input  autofocus autocomplete="off" required type="text" name="Rate" value="6%" 
>


<br> <br>


<input class="btn btn-lg btn-success" type="submit" name="submit" value="Submit">

</form>

<?php 

include "connection.php";

if(isset($_POST['submit'])){

$amt = $_POST['loan-amt'];

$reason = $_POST['loan-reason'];
$user = $_POST['name'];
$dob = $_POST['age'];

$Address = $_POST['address'];

$pin = $_POST['pincode'];

$father = $_POST['fname'];

$adhaar = $_POST['adhaar'];

$pan = $_POST['pan'];

$email = $_POST['email'];


$mobile = $_POST['mobile'];

if(isset($_POST['gender'])){

$gender = $_POST['gender'];

}
else{
	echo "select gender";
}



if (isset($_FILES["image"])) {
  
 $filename = $_FILES["image"]['name'];
 $filetemp = $_FILES["image"]['tmp_name'];

 $Gaurantier_image  = "BANKPHOTO/".$filename;
 move_uploaded_file($filetemp, $Gaurantier_image);
}
	
	$pass_year = $_POST['passed_exam'];

$fyear = $_POST['fyear'];


if(isset($_POST['Education'])){

	$Education = $_POST['Education'];
}else{

	echo "select your education type";
}

$college_name = $_POST['college_name'];

$college_no = $_POST['college_no'];

$college_address = $_POST['caddress'];

$student_name = $_POST['student_name'];

$loan_ammount = $_POST['loan_ammount'];

$loan_date = $_POST['loan_date'];

$end_date = $_POST['end_date'];

$Rate = $_POST['Rate'];

$z = $_session['x'];


$to = $_POST['email'];
$subject = "Education Loan in APNA BANK.";

$body = "your education loan for $amt rupee has been succesfull your ACCOUNT NO IS $z and your OPENING DATE $loan_date And ENDING DATE $end_date intrest rate is $Rate keep connect with APNA BANK . ";

$header = "FROM: divyanshu.8174@gmail.com";

if(mail($to , $subject , $body , $header)){
  echo "mail sent";


?>

<script> alert("your education loan process has been completed and your account number and loan time durtion our team sent you on your email");
confirm("ok thank you ")
if(true)
{
	window.open('index.php');
}else{
	window.open('index.php');
}


</script>

<?php


}else{
echo "mail did'nt send";}







$insert = "

INSERT INTO `education_loan`(`Loan_rupee`, `scheme`, `Applicant_Address:`, `Pincode`, `Father's Name:`, `Date_of_Birth`, `PAN_no.`, `E-mail`, `Mob._No`, `Your_image`, `Gender`, `Recently_passed_class/course`, `year_of_passing`, `Education_type`, `College/Institute_Name`, `College_ref_No`, `college_address`, `Name_of_Student`, `Ammount`, `Loan_date`, `loan_ending_date`, `Rate%`, `user`, `adhaar_number`,`ACCOUNT_NUMBER`)


 VALUES ('$amt','$reason','$Address','$pin','$father','$dob','$pan','$email','$mobile','$Gaurantier_image','$gender','$pass_year','$fyear','$Education','$college_name','$college_no','$college_address','$student_name','$loan_ammount','$loan_date','$end_date','$Rate','$user','$adhaar','$z')";


$res = mysqli_query($con , $insert);






}












 ?>











		