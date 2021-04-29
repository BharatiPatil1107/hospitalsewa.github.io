<?php
include "connection.php";
$id=$_GET["id"];
$firstname="";
$lastname="";
$gender="";
$age="";
$date1="";
$email="";
$city="";
$contact="";
$res=mysqli_query($link,"select * from stud where id=$id");
while ($row=mysqli_fetch_array($res))
{
	$id=$row["id"];
	$firstname=$row["firstname"];
	$lastname=$row["lastname"];
	$gender=$row["gender"];
  $date1=$row["age"];
	$date1=$row["date1"];
	$email=$row["email"];
	$city=$row["city"];
	$contact=$row["contact"];

}
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body style="background-color:black;">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style type="text/css">
	.container{
		background-color:#CCCCFF;
		height:800px;
		width: 600px;
		align:centre;
		margin-top:20px;

		border:2px solid #404040;
	}

	h2{
		color:#660066;
		text-align:center;
		
	}
	</style>

  <div class="container">
  <div class="col12">
  <h2>Update Deltails</h2>
  <form action="" name="form1" method="post">
  <div class="form-group">
  <label for="exampleInputEmail1">Id</label>
    <input type="text" class="form-control" id="id" name="id"  placeholder="Enter id" value="<?php echo $id; ?>">
  </div>
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname"  placeholder="Enter first name" value="<?php echo $firstname; ?>" >
  </div>
 

  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="enter last name" value="<?php echo $lastname; ?>">
  </div>

   <div class="form-group">
    <label class="exampleInputPassword1">Gender
    <input type="radio" class="form-control" name="gender" value="male" <?php 
	if($gender=="male")
	{
		echo "checked";
	}
	?>
	>

	<span class="form-check1">Male</span>
	</label>
	 <label class="exampleInputPassword1">
    <input type="radio" class="form-control" name="gender" value="female" <?php 
	if($gender=="female")
	{
		echo "checked";
	}
	?>
	>
	<span class="form-check1">Female</span>
	</label>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Age</label>
    <input type="text" class="form-control" id="age" name="age" placeholder="enter age" value="<?php echo $age; ?>">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="date" class="form-control" id="date" name="date1"  value="<?php echo $date1; ?>">
  </div>



   <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="email" name="email"  placeholder="Enter Email" value="<?php echo $email; ?>">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">City</label>
 
 <input type="text" class="form-control" id="city" name="city"  placeholder="Enter City" value="<?php echo $city; ?>">
	

  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">contact</label>
    <input type="text" class="form-control" id="contact" name="contact"  placeholder="Enter contact no" value="<?php echo $contact; ?>" maxlength="10">
  </div>
  



  

  
  <button type="submit" name="Update" class="btn btn-primary">Update</button>
  
</form>
</div>
</div>


</div>

  </body>

<!-- Update code -->


  <?php
 if(isset($_POST["Update"]))
  {
	  mysqli_query($link,"update stud set firstname='$_POST[firstname]',lastname='$_POST[lastname]',gender='$_POST[gender]',age='$_POST[age]', email='$_POST[email]',
	  city='$_POST[city]',contact='$_POST[contact]' where id=$id");

  ?>
<script type="text/javascript">
window.location="register.php";
</script>
<?php

}
?>

  


</html>