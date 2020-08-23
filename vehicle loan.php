<?php session_start(); 
ob_start();
error_reporting(0);
?>

<!DOCTYPE! html>
	<head>
		<title> APNA BANK vehicle loan </title>
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
				<a class="navbar-brand" href="index.php"> 
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
 <h3 style="text-align: center; margin-top: px; margin-top: 30px;"> (Application Form for Vehicle loan)</h3>

<div class="container">


<form class="form-group" action="" method="POST" enctype="multipart/form-data">

	I/We request you to grant me/us a loan facility of Rs.

							<label for="loan-amt"></label>

							

							<input autofocus autocomplete="off" required  type="tel"  id="loan-amt" name="loan-amt" value="" style="text-align: center; height:25px : border:none; border-bottom: 3px dotted black; outline: none; border-top-style: none; border-left-style: none; border-right: none;"> under Vecile Loan Scheme for


							<label for="loan-reason"></label>
							<input autofocus autocomplete="off" required type="text" id="loan-reason" name="loan-reason" value="" style=" text-align: center;width:200px; height:25px;">
							To enable you to consider the proposal, I/We submit the following particulars.	
					
					<p>Please complete all sections in <strong>BLOCK LETTERS</strong> and tick options wherever applicable</p><br>



 
						<h3 style="background:  #b83369; color: #fff; text-align: center;">	<mark>General Information :</mark> </h3> <br>
								<label style="text-align: left;" for="name">Name:</label>
								<input autofocus autocomplete="off" required class="form-control" type="text" id="name" name="name" value="" style="height:24px;"><br><br>

								<label for="age">Date of birth:</label>
								<input autofocus autocomplete="off" required class="form-control" type="date" size="4" id="age" name="age" value="" style="height:24px; text-align: center;"><br><br>


								<label for="address">Address:</label>
								<textarea class="form-control" type="textarea" id="address" name="address" value="" > </textarea><br><br>


								<label for="pincode">Pincode:</label>
								<input autofocus autocomplete="off" required size="6" type="number" id="pincode" name="pincode" value="" style="height:24px;"><br><br>
							

						
							<h3 style="color: #fff; background: #b83369; text-align: center;">Personal Information :</h3> <br>

								<label for="fname">Father's Name:</label>
								<input  class="form-control" type="text" id="fname" name="fname" value="" style="height:24px;"><br><br>

								<label for="birthday">Adhaar number:</label>
								<input  class="form-control" type="text" id="birthday" name="Adhaar" value="" style="height:24px;"><br><br>

								<label for="pan">PAN no.:</label>
								<input  class="form-control" type="Textarea"name="pan" value="" style="height:24px;"><br><br>


								<label for="email">E-mail:</label>
								<input  class="form-control" type="email" id="email" name="email" value="" style="height:24px;"><br><br>
					




								<label for="mobile">Mob. No.:</label>
								<input  class="form-control" type="tel" id="mobile" name="mobile" value="" style="height:24px;"><br>

								<label for="gender">Gender:</label>
								<input  type="radio"  name="gender" value="male" id="male"> <label for="male" > Male </label>
								<input autofocus autocomplete="off" required type="radio"name="gender" id="female" value="female"> <label for="female"> female </label> 
								<input autofocus autocomplete="off" requiredautofocus autocomplete="off" required  type="radio" name="gender" value="other" id="other"> <label for="other"> Other </label> <br>

								<label for="marriage">Married Status:</label> <br>
								<input autofocus autocomplete="off" required type="radio" id="marriage" name="marriage" value="yes"> Yes
								<input autofocus autocomplete="off" required type="radio" id="marriage" name="marriage" value="no"> No <br>

								<label for="employment"> Employment Status:</label>
								
								<br> <br>
							<span>	<input autofocus autocomplete="off" required  type="radio" id="employment" name="employment" value="salaried"> Salaried 
								<input  style="margin-left: 40px;" type="radio" id="employment" name="employment" value="self-employed"style="";>Self-Employed  </span>  <br> <br>

<span>
								<input autofocus autocomplete="off" required type="radio" id="employment" name="employment" value="professionals"style="margin-left:0px";>Professionals 
								<input autofocus autocomplete="off" required  type="radio" id="employment" name="employment" value="housewife"style="margin-left:20px;";>Housewife </span> <br>
						




						



								<label for="ifsc">IFSC Code:</label>
								<input autofocus autocomplete="off" required  type="textarea" id="ifsc" name="ifsc" value="" style="height:24px;"><br><br>

								<label for="branch-name">Branch Name:</label>
								<input autofocus autocomplete="off" required  type="text" id="branch-name" name="branch-name" value="" style="height:24px;"><br><br>
						<label> Annual income </label>

								<input   type="text" name="income" class="form-control">
<br><br>

<h3 style="background: #b83369; color: #fff; text-align: center; ">  <mark >Vechile Information :</mark> </h3> <br>
								<label for="vechile">Type of Vechile:</label>
								<input autofocus autocomplete="off" required type="radio" id="vechile" name="vechile" value="male"> Under 4 lakhs.
								<input autofocus autocomplete="off" required  type="radio"id="vechile" name="vechile" value="female"> Between 4 to 8 lakhs.
								<input autofocus autocomplete="off" required  type="radio"id="vechile" name="vechile" value="other"> Above 8 lakhs. <br><br>


								<label for="model name">Model Name:</label> 
								<input autofocus autocomplete="off" required  class="form-control" type="text" id="model name" name="model_name" value="" style="height:24px;"><br><br>


								<label for="model no.">Model No.:</label> 
								<input  autofocus autocomplete="off" required class="form-control" type="textarea" id="model no." name="model_no" value="" style="height:24px;"><br><br>

								<label for="dl">Driving License no :</label> 
								<input autofocus autocomplete="off" required  type="textarea" id="dl" name="dl" value="" style="height:24px;"><br><br>

								<label for="dealer name">Name of Dealer:</label> 
								<input autofocus autocomplete="off" required  class="form-control"  type="text" id="dealer name" name="dealer_name" value="" style="height:24px;"><br><br>






<h3 style="background: #b83369; color: #ffff; text-align: center;"> <mark > Loan information. </mark></h3>

<label> Ammount </label>

<input autofocus autocomplete="off" required  type="text" name="loan_ammount" class="form-control" placeholder="loan Ammount">

<br> <br>




<label> Account number </label>

<input   class="form-control"  type="text" style="color: red;" name="loan_date" value="<?php $_session['z'] = rand(100000 , 999999); echo "account number you will get on your email"?>"; disabled>



<br><br>


<label> Loan date :</label>


<input autofocus autocomplete="off" required  style="margin-left:65px; width:  150px;" type="date" name="loan_date">
<br> <br>



<label> loan ending date : </label>

<input autofocus autocomplete="off" required  style="width:  150px;" type="date" name="end_date">

<br> <br>
<label> Rate%</label>

<input autofocus autocomplete="off" required  type="text" name="Rate" value="6%" >


<br> <br>


<input type="submit"  name="submit" class="btn btn-lg btn-success">
</form>



<?php


include 'connection.php';
if (isset($_POST['submit'])) {
 


$loan_amt = $_POST['loan-amt'];

$loan_reason = $_POST['loan-reason'];

$user_name = $_POST['name'];

$dob = $_POST['age'];

$address = $_POST['address'];

$pincode = $_POST['pincode'];

$father_name = $_POST['fname'];

$Adhaar = $_POST['Adhaar'];

$pan = $_POST['pan'];

$email = $_POST['email'];

$mobile = $_POST['mobile'];



	$gender = $_POST['gender'];

	$marriage = $_POST['marriage'];



	$employment = $_POST['employment'];





$ifsc = $_POST['ifsc'];

$name = $_POST['name']; #no store


$branch_name = $_POST['branch-name'];




	$vehicle = $_POST['vehicle'];



$model_name = $_POST['model_name'];


$model_no = $_POST['model_no'];


$dl =$_POST['dl'];


$dealer_name = $_POST['dealer_name'];




$loan_ammount = $_POST['loan_ammount'];


$Account = $_session['z'];


$loan_date = $_POST['loan_date'];


$end_date = $_POST['end_date'];

$rate = $_POST['Rate'];


$insert = " INSERT INTO `vehical_loan`(`loan_amt`, `loan_reason`, `user_name`, `date-of_birth`, `address`, `pincode`, `father_name`, `Adhaar`, `pan_no`, `email`, `mobile`, `gender`, `marriage`, `employment`, `ifsc_code`, `branch_name`, `vehicle`, `model_name`, `model_number`, `driving_license`, `dealer_name`, `loan_ammount`, `account_number`, `loan_date`, `end_date`, `RATE`)

 VALUES ('$loan_amt','$loan_reason','$user_name','$dob','$address','$pincode','$father_name','$Adhaar','$pan','$email','$mobile','$gender','$marriage','$employment','$ifsc','$branch_name','$vehicle','$model_name','$model_no','$dl','$dealer_name' ,'$loan_ammount','$Account','$loan_date','$end_date','$rate') ";


$res = mysqli_query($con , $insert);

if($res){

	$to = $_POST['email'];
$subject = "vehical Loan in APNA BANK.";

$body = "your vehical loan for $loan_amt rupee has been succesfull your ACCOUNT NO IS $Account and your OPENING DATE $loan_date And ENDING DATE $end_date intrest rate is $rate keep connect with APNA BANK . ";

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


}
else {

	echo "not submitted";
}

}
?>










		</form></div></div></body> </html>