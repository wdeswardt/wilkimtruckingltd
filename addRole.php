<?php
	require_once 'functions/functions.php';
	$companyName = 'Wilkim Trucking Ltd';
	$pageTitle = 'Add New Role';
	
//	if($_POST){
//		var_dump($_POST);
//	}
	
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
			<h1><?php echo $companyName; ?> - <?php echo $pageTitle; ?></h1>
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
								<h3 class="panel-title">Add New Role</h3>						
							</div>
							<div class="panel-body">
								<form role="form" method="post" action="">				
									<div class="form-group">
										<input type="text" name="shortTitle" id="shortTitle" class="form-control input-sm" placeholder="Short Title e.g: CEO" />
									</div>
									<div class="form-group">
										<span class="label label-warning">Warning Label</span>
									</div>
									<div class="form-group">
										<input type="text" name="longTitle" id="longTitle" class="form-control input-sm" placeholder="Long Title e.g: Chief Executive Officer" />
									</div>
									<div class="form-group">
										<span class="label label-warning">Warning Label</span>
									</div>									
									<div class="form-group">
										<textarea name="jobDescription" id="jobDescription" class="form-control" rows="5" placeholder="Job Description"></textarea>
									</div>
									<div class="form-group">
										<span class="label label-warning">Warning Label</span>
									</div>									
									<div class="form-group">
										<textarea name="jobResponsibilities" id="jobResponsibilities" class="form-control" rows="5" placeholder="Job Responsibilities"></textarea>
									</div>
									<div class="form-group">
										<span class="label label-warning">Warning Label</span>
									</div>									
									<div class="form-group">
										<textarea name="jobRequirements" id="jobRequirements" class="form-control" rows="5" placeholder="Job Requirements"></textarea>
									</div>	
									<div class="form-group">
										<span class="label label-warning">Warning Label</span>
									</div>
									<input type="submit" value="Add Role" class="btn btn-info btn-block" /> 
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

