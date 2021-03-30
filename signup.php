<!-- AMARA TARIQ -->
<!-- singup.html -->
<!-- SIGNUP PAGE -->
<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
		<?php
			if(isset($_SESSION['authenticated']) && $_SESSION['authenticated']){
				include "header2.php";
			}else{
				include "header.php";
			}
		?>
	</head>
	<body>
		
        <h1>Sign up</h1>

		<form action="signup-handler.php" class="form-style" method="post">
			<div class="container">
			  <p>Please fill in this form to create an account.</p>
			  <hr>
		  
			  <label for="firstname"><b>First Name</b></label>
			  <input type="text" value = "<?php echo isset($_SESSION['form']['firstname']) ? $_SESSION['form']['firstname'] : ''; ?>" placeholder="Enter First Name" name="firstname" required>
			  
			  <label for="lastname"><b>Last Name</b></label>
			  <input type="text" placeholder="Enter last name" name="lastname" required>
		  

			  <label for="email"><b>Email</b></label>
			  <input type="text" placeholder="Enter Email" name="email" required>
		  
			  <label for="username"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" required>
		  

			  <label for="password"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="password" required>
		  
			  <label for="passwordMatch"><b>Repeat Password</b></label>
			  <input type="password" placeholder="Repeat Password" name="passwordMatch" required>

			  <div class="clearfix">
				<button type="submit" class="signupbtn">Sign Up</button>
			  </div>
			</div>
		  </form>

		<footer>
		<?php
			include "footer.php";
		?>
		</footer>

	</body>
</html>
