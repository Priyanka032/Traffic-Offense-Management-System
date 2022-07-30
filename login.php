<?php
include"connect.php";
?>


<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<?php 
	$result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
		<title><?php echo $row['site_name']; ?></title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
	<?php }?>

		
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		
		<link href="assets/css/style.css" rel='stylesheet' type='text/css' media="all">
			
			<link href="http://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
				<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
				
				</head>
				
<body>
					  <style>
h1 {
    color: white;
    font-family: Merienda One;
    font-size: 60px
}
</style>
					  <h1><center>TRAFFIC OFFENSE MANAGEMENT SYSTEM</center></h1>
					

						<div class="swm-right-w3ls">
							<form action="login2.php" method="post">
								<div class=" header-side">
									
									
								</div>
								<div class="main">
									<div class="icon-head">
										<h2>Login Here</h2>
									</div>
									<div class="form-left-w3l">
										<input type="text" name="username" placeholder="Username" required="">
											<div class="clear"></div>
										</div>
										<div class="form-right-w3ls ">
											<input type="password" name="pass" placeholder="Password" required="">
												<div class="clear"></div>
											</div>
											<div class="btnn">
												<button type="submit">Login</button>
												<br>
												
												</div>
											</div>
										</form>
									</div>
                                 </div>
								<div class="copy">
								<?php 
	$result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
									
	<?php } ?>
								</div>
							</body>
						
</html>