<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="./inc/style.css">
</head>
<body>
	<div class="formwrap1">
	<div class="formwrap">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<div class="inputbox">
	<input type="text" placeholder="Name of product" name="nameofproduct">
	</div>
	<div class="inputbox">
	<select>
		<option value="100ml">100Mls</option>
		<option value="250ml">250Mls</option>
		<option value="500ml">500Mls</option>
		<option value="1l">1l</option>
	</select>
	</div>
	<div class="inputbox">
	<input type="number" name="price" placeholder="please put price">
	</div>
	</form>
	<button class="btn" type="submit" name="submit">SUBMIT</button>
	</div>   
	</div>
	 
</body>
</html>
