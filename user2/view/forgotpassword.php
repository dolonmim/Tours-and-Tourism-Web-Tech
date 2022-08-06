
<!DOCTYPE html>
<html>
<head>
	

	<title>Reset pass</title>
</head>
<body>
	<div class="container">
		<form action="../view/login.html" method="POST" class="">
			<?php
			if($errors>0)
			{
				foreach($errors AS $displayErrors){ ?>
				
				<div id="alert"><?php echo $displayErrors; ?> </div>
				<?php
			}
			}
			?>
			
				<input type="email" placeholder="Email" name="email" value="" required>
			
			
				<div><input type="submit" name="submit" value="Verify"></div>
            
			
		</form>
		</div>
	
</body>
</html>