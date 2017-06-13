<?php
	$companyName = 'Wilkim Trucking Ltd';
	$pageTitle = 'Vacancies';
	

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

		What is this?

		</div>
		
		<?php
		
			require_once('includes/footer.php');
		
		?>
		
	</div>
  </body>
</html>

