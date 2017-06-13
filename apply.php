<?php
	$companyName = 'Wilkim Trucking Ltd';
	$pageTitle = 'Apply';
	
	if($_GET['vacID'] !== ''){
		$vacID = $_GET['vacID'];
		$roleDescription = $_GET['vacDesc'];
		
	}
	
	if($_POST){
		$vacID = $_POST['vacancy'];
	}
?>

<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->  
   
    <title><?php echo $pageTitle; ?></title>
    <link rel='stylesheet' href='/css/border.css'/>
	<link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
	<div class='page'>
		<div class='menu'>
			<h1><?php echo $companyName; ?> - <?php echo $pageTitle . ' ' . $roleDescription; ?></h1>
		</div>
		
		<?php
		
			require_once('includes/leftPane.php');
			require_once('includes/rightPane.php');
		
		?>
		<div class='content'>
			<div class="container">
				<div class="row centered-form">
					<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Please fill out this form to complete your job application for <b><i><?php echo $roleDescription; ?></i></b></h3>
								<hr />
								<h4 class="panel-title">Before you fill out this application please make sure that you have your SteamID64 on hand.  If not please click on this link: <a href="https://steamid.io/" target="_blank">SteamID64</a>.</h4>
							
							</div>
							<div class="panel-body">
								<form role="form" method="post" action="">				
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="firstName" id="firstName" class="form-control input-sm" placeholder="First Name" value="" />
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="lastName" id="lastName" class="form-control input-sm" placeholder="Last Name" />
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="city" id="city" class="form-control input-sm" placeholder="City where you live" />
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="country" id="country" class="form-control input-sm" placeholder="Country" />
											</div>
										</div>								
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="steamID64" id="steamID64" class="form-control input-sm" placeholder="SteamID64" />
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="steamID" id="steamID" class="form-control input-sm" placeholder="Steam Username" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="discordUsername" id="discordUsername" class="form-control input-sm" placeholder="Discord Username" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" />
									</div>

									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" />
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" />
											</div>
										</div>
									</div>
									<input type="hidden" name="vacancy" id="vacancy" value="<?php echo $vacID; ?>" />
									<input type="submit" value="Register" class="btn btn-info btn-block" /> 
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php
		
			require_once('includes/footer.php');
		
		?>
    </div>
  </body>
</html>

