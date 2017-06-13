<?php
	$companyName = 'Wilkim Trucking Ltd';
	$pageTitle = 'Index';

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
		<?php
			require_once('includes/header.php');
			require_once('includes/leftPane.php');
			require_once('includes/rightPane.php');
		
		?>
		<div class='content'>
			<div class="container">
			We have the following vacancy availabe.
				<div class="table-responsive">          
				  <table class="table">
					<thead>
					  <tr>
						<th>Vacancy Number</th>
						<th>Vacany Description</th>
						<th>Link</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>1</td>
						<td>CEO</td>
						<td><a href="apply.php?vacID=1&vacDesc=CEO" class="btn btn-primary" role="button">Apply</a></td>
					  </tr>
					  <tr>
						<td>2</td>
						<td>Driver</td>
						<td><a href="apply.php?vacID=2&vacDesc=Driver" class="btn btn-primary" role="button">Apply</a></td>
					  </tr>
					  <tr>
						<td>3</td>
						<td>Dispatch Officer</td>
						<td><a href="apply.php?vacID=3&vacDesc=Dispatcher" class="btn btn-primary" role="button">Apply</a></td>
					  </tr>					  
					</tbody>
				  </table>
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

