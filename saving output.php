<?php

session_start();

include "connection.php";
                                            #FOR `password set saving account`

$x = $_SESSION['Costumer'];


$query = mysqli_query($con , "SELECT * FROM `saving account` WHERE `account numbrr` = '$x'");

$row = mysqli_num_rows($query);


for ($i=1; $i <= $row ; $i++) { 

   	$run = mysqli_fetch_array($query); } 

   	
?>


<?php

                                            #FOR `password set saving account`


$quer = mysqli_query($con , "SELECT * FROM `password set saving account` WHERE `ACCOUNT nm` = '$x'");

$res = mysqli_num_rows($quer);


for ($i=1; $i <= $res ; $i++) { 

   	$runn = mysqli_fetch_array($quer); } 

?>














 ?>


<!DOCTYPE html>
<html>
<head>
	<title> <?PHP echo $run['full name']  ?> </title>




  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body>



<div class="wrapper">

<img style="transform: translate(110% , 30%); opacity: .2; position: fixed;" src="https://lofrev.net/wp-content/photos/2014/09/A-logo.png" width="400px" height="400px">


<div class="container">

<marquee height="-18px;" >
<h3 style="display:flex; justify-content: center; font-weight: bolder; "> WELCOME <?PHP echo $run['full name']  ?>  
</h3></marquee>


<h3 class="mt-5" style="float: left;"> APNA BANK </h3> <h3 class="mt-5" style="float: right;"> अपना बैंक </h3>





<div class="table-responsive mt-5" style="margin-top: 70px;">
<table class="table table-striped mt-5">

<thead> <tr> <img style="width: 100px; height:100px; margin-top: 70px;" src="<?php  echo$run['your image']; ?>">  </tr>  </thead>

<tr> 



<td> <b> ACCOUNT NUMBER : </b> <?php echo $x; ?>
 </td>
<td> <b> Bank : </b> Apna bank,
 </td>

</tr>
<tr>
<td> <b> Account holder name : </b> <?PHP echo $run['full name']  ?>
 </td>

<td> <b> ifsc code : </b> AP1432BK
</td>

<tr> 
	<td> <b> Email-Id : </b> <?php	echo $run['Email-Id']; ?>
 </td>

<td> <b> issue date : <?php echo $run['opening date & time']  ?> </b> 
 </td>

 <tr>
 	<td> <b> Mobile no. :</b> <?php  echo $run['Mobile no.']; ?>
 </td>
 <td> <b> Email-id :</b> apnabank@gmail.com</td>
</tr>



</table>






















</body>
</html>