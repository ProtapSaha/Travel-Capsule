<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background-color: #63738a  ;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
	<?php
		$first_name = $last_name = $email = $password = $confirm_pasword = "";
		if(isset($_POST['submit'])){
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$first_name = $_POST['first_name'];
				$last_name = $_POST['last_name'];
				$email  = $_POST['email'];
				$password = $_POST['password'];
				$confirm_pasword = $_POST['confirm_password'];

				if($first_name != "" && $last_name != "" && $email != "" && $password != "" && $confirm_pasword != ""){
					if($password != $confirm_pasword){
						header("location:register.php");
					}
					else{
						$connection = mysqli_connect("localhost","root","","signup");
						if($connection){
							$my_qur = "INSERT INTO userinfo(email,password,first_name,last_name) VALUES('$email','$password','$first_name','$last_name')";
							$result = mysqli_query($connection,$my_qur);
							if($result){
								header("location:reg_success.php");
							}
							else{
								header("location:register.php");
							}
						}else{
						echo "NOT CONNECTED<br>".mysqli_connection_error();
						}
					}
					
				}
			}
		}
	?>
	
	
         <!-- 
        <script>
	function signupvalidation() {
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var password = document.getElementById('password').value;
		var confirm_pasword = document.getElementById('confirm_pasword').value;
		var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

		var valid = true;

		if (name == "") {
			valid = false;
			document.getElementById('name_error').innerHTML = "required.";
		}

		if (email == "") {
			valid = false;
			document.getElementById('email_error').innerHTML = "required.";
		} else {
			if (!emailRegex.test(email)) {
				valid = false;
				document.getElementById('email_error').innerHTML = "invalid.";
			}
		}

		if (password == "") {
			valid = false;
			document.getElementById('password_error').innerHTML = "required.";
		}
		if (confirm_pasword == "") {
			valid = false;
			document.getElementById('confirm_password_error').innerHTML = "required.";
		}

		if (password != confirm_pasword) {
			valid = false;
			document.getElementById('confirm_password_error').innerHTML = "Both passwords must be same.";
		}

		return valid;
	}
</script>

-->
<div class="signup-form">
	<h3 style="text-align: center;">Travel capsule register form</h3>
    <form action="" method="POST">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute</p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6">
					<label>First Name</label>
					<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				
				<div class="col-xs-6">
					<label>Last Name</label>
					<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<label>Email</label>
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
			<label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
			<label>Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
			 <input type="submit" name="submit" value="Register Now">
		<!--
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
            -->
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
</div>



</body>
</html>                            