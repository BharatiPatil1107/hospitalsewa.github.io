<?php
include "connection.php";
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale="1>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 


    <title></title>
  </head>
  <script type="text/javascript">
  function isNumberKey(evt){
	  var charCode=(evt.which)? evt.which :evt.keyCode
		  if(charCode > 31 &&(charCode < 48 || charCode > 57))
		  return false;
	  return true;
	}

	function isNumberKey1(evt){
	  var charCode=(evt.which)? evt.which :evt.keyCode
		  if(charCode > 31 &&(charCode < 48 || charCode > 57))
		  return false;
	  return true;
	}
	</script>
  

  <body style="background-color:black;">


    <!-- Optional JavaScript -->
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" ></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<style type="text/css">
		
	.container{
		background-color:skyblue;
		width: 600px;
		align:centre;
		border:2px solid #404040;
		margin-bottom:5px;
		position:relative;
	

	}
	h3{
		color:#CC3366;
		text-align:center;
		
	}
	.form-group label{
		color:black;
		font-family:Bold;
	}
	.form-row{
		color:black;
		font-family:Bold;

	}
	.col10{
		color:black;
		height:100px;
		width:auto;
		margin-left:10px;
		margin-bottom:100px;
	
	}
	
	table{
		border:3px dotted gray;
        margin-left: 250px;
		
	}
	th,td{
		color:white;
	}
	
	

	
	#text2{
	width: 100px;
	}
	

@media screen and (max-width:100px){
	
		.table{
		margin:0px;
		width:auto;

		}
}
	
	</style>

  <div class="container">
  <div class="col-lg-12">
  <h3>BOOK NOW</h3>
  <form action="" name="form1" method="post" >
  <div class="form-group">
  <label for="example">Id</label>
    <input type="text" class="form-control" id="userid" name="id" aria-describedby="emailHelp" placeholder="Enter id" onkeypress="return isNumberKey(event);" required>
	
  </div>
   <div class="form-group">
    <label for="example">First Name</label>
    <input type="text" class="form-control" id="fname1" name="firstname" aria-describedby="emailHelp" placeholder="Enter first name" required>
	
  </div>
  <div class="form-group">
    <label for="example">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lastname" placeholder="enter last name" required>
  </div>


  <div class="form-group">
    <label class="exampleInputPassword1">Gender
    <input type="radio" class="form-control" id="exampleInputPassword1" name="gender" value="male">
	<span class="form-check1">Male</span>
	</label>

	<label class="exampleInputPassword1">
    <input type="radio" class="form-control" id="exampleInputPassword1" name="gender" value="female">
	<span class="form-check1">Female</span>
	</label>
  </div>
  <div class="form-group">
    <label for="example">Age</label>
    <input type="text" class="form-control" id="text2" name="age">
  </div>


   <div class="form-group">
    <label for="example">Date of birth</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="date1">
  </div>

   <div class="form-group">
    <label for="example">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>



   <div class="form-row">
   <div class="col-5">
    <label>City</label>
    <select id="inputcity" class="form-control" name="city">
	<option>Choose...</option>
	<option>Shirpur</option>
	<option>Pune</option>
	<option>Jalgaon</option>
	</select>
	</div>

  </div>
   <div class="form-group">
    <label for="example">contact</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="contact" aria-describedby="emailHelp" placeholder="Enter contact no" onkeypress="return isNumberKey1(event);" maxlength="10">
  </div>
  



  

  <button type="submit" name="Insert" class="btn btn-primary">Create </button>
  
</form>
</div>
</div>

<div class="col-8">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
	  <th scope="col">Gender</th>
	  <th scope="col">Age</th>
	  <th scope="col">Date</th>
      <th scope="col">Email</th>
	  <th scope="col">City</th>
	  <th scope="col">Contact</th>
	  <th scope="col">Edit</th>
	  <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
   



  <!-- fetching data from database-->

   <?php
	$res=mysqli_query($link,"select * from stud");
	while($row=mysqli_fetch_array($res))
	{
		echo"<tr>";
		echo "<td>";echo $row["id"]; echo"</td>";
		echo "<td>";echo $row["firstname"]; echo"</td>";
		echo "<td>";echo $row["lastname"]; echo"</td>";
		echo "<td>";echo $row["gender"]; echo"</td>";
		echo "<td>";echo $row["age"]; echo"</td>";
		echo "<td>";echo $row["date1"]; echo"</td>";
		echo "<td>";echo $row["email"]; echo"</td>";
		echo "<td>";echo $row["city"]; echo"</td>";
		echo "<td>";echo $row["contact"]; echo"</td>";

		echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"];?>"> <button type="button" class="btn btn-success">Update</button></a><?php echo "</td>";
		echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"];?>"> <button type="button" class="btn btn-danger">Delete</button></a><?php echo "</td>";

		

		echo"</tr>";
	}
	?>


  </tbody>
</table>
</div>






  </body>


  <!-- Inesrt code -->

  <?php
  if(isset($_POST["Insert"]))
  {
	  mysqli_query($link,"insert into stud values('$_POST[id]','$_POST[firstname]','$_POST[lastname]','$_POST[gender]','$_POST[age]','$_POST[date1]','$_POST[email]', '$_POST[city]','$_POST[contact]')");

  }
  ?>

</html>




































