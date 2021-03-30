<?php
  session_start();
  if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
     header('Location: login.php');
     exit;
  }
  //echo "<pre>" . print_r($_SESSION,1) . "</pre>";
?>
<link rel="stylesheet" href="mystyle.css">
<form method="post" action="comment_handler.php" enctype="multipart/form-data">
<div class="container">
  <h2>Commission Request Form</h2>
   <div>
    <label for="firstname">First Name:</label>
    <input type="text" class="personal" value="<?php echo isset($_SESSION['form_data']['firstname']) ? $_SESSION['form_data']['firstname'] : ''; ?>" placeholder="first name">
  <div>
    <label for="lastname">Last Name:</label>
    <input type="text" class="personal" value="<?php echo isset($_SESSION['form_data']['lastname']) ? $_SESSION['form_data']['lastname'] : ''; ?>" placeholder="last name">
  <div>
    <label for="email">Email:</label>
    <input type="text" class="personal" value="<?php echo isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : ''; ?>" placeholder="your email">
  </div>
</form>
         <label for="commission">Commission Details:</label>
    <input type="text" value="<?php echo isset($_SESSION['form_data']['commission']) ? $_SESSION['form_data']['commission'] : ''; ?>" class=details placeholder="Type out specifics here.">
  </div>
     <br>
  <div class="buttons">
    <button type="submit" class="enter"><strong>Send</strong></button>
  </div>
   </div> 
</div>
     
     
  

