<!-- AMARA TARIQ -->
<!-- login.html -->
<!-- LOGIN PAGE -->
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
		
        <h1>Login</h1>

		<form action="login-handler.php" method="post">
			
			<div class="container">
			  <label for="username"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" value= "<?php 
			  													if(isset($_SESSION['loginFail'])){echo $_SESSION['presets']['username'];}?>" required>
		  
			  <label for="password"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="password" required>
				  
			  <button type="submit" value="submit">Login</button>
			</div>
		  </form>


		<footer>
		<?php
			include "footer.php";
		?>
		</footer>

	</body>
</html>
