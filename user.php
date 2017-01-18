<?php
include('includes/db.class.php'); // call db.class.php
$bdd = new db(); // create a new object, class db()

if(isset($_POST['submit'])) {
	$user_email = (isset($_POST['user_email']) && $_POST['user_email'] != '')?htmlspecialchars($_POST['user_email']):'';
	$user_password = (isset($_POST['user_password']) && $_POST['user_password'] != '')?htmlspecialchars($_POST['user_password']):'';
	$query = "INSERT INTO users (user_email, user_password) VALUES (?,?)";
	$data  = array($user_email,$user_password);
	$bdd->execute($query,$data);
	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="wrapper">
	<div class="col-md-6">
		<div class="bs-example">
		    <form method="post">
		        <div class="form-group">
		            <label for="inputEmail">Email</label>
		            <input type="email" class="form-control" id="inputEmail" name="user_email" placeholder="Email">
		        </div>
		        <div class="form-group">
		            <label for="inputPassword">Password</label>
		            <input type="password" class="form-control" id="inputPassword" name="user_password" placeholder="Password">
		        </div>
		        <!-- <div class="checkbox">
		            <label><input type="checkbox"> Remember me</label>
		        </div> -->
		        <button type="submit" name="submit" class="btn btn-primary">Save</button>
		    </form>
		</div>
	</div>
</div>
</body>
</html>  
