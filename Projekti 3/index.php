<!DOCTYPE html>
<html>
<head>
	<title>Kyqu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Kyqu</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Emri i perdoruesit</label>
     	<input type="text" name="uname" placeholder="emri i perdoruesit"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Krijo nje llogari te re!</a>
     </form>
</body>
</html>