
<?php 
include("Header.php") 
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Log In </title>
	<style>

    </style>
	<link rel="stylesheet" href="style.css">

  </head>
  <body style="background-color: #FDEBD0;">

    <header>

	 
    </header>
	
	<br><br>
<div class="form-container">
  <h2>Sign Up</h2>
  <form method="POST" action="login_process.php">
    <div class="form-group">
      <label for="name">User:</label>
      <input type="text" name="userid" = "userid" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password" = "password" required>
    </div>
	<div class="form-group">
      <label for="role">Role:</label>
      <input type="text" name="role" = "role" required>
    </div>
	<tr>
	<td>
	<p><img src="/EMS/captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
	</td>
	<td><input type="text" maxlength="5" name="captcha" value=""></td>
	</tr>
	<br>
	<br>
    <div class="form-group">
      <button type="submit">Sign Up</button>
    </div>
  </form>
</div>
		
 </body>
</html>
