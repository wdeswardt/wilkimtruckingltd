<?php
	$companyName = 'Wilkim Trucking Ltd';
	$pageTitle = 'Template';

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
			require_once('includes/menu.php');
			require_once('includes/leftPane.php');
			require_once('includes/rightPane.php');
		
		?>
		<div class='content'>
			<div class="container">
				<div class="table-responsive">          
				  <table class="table">
					<thead>
					  <tr>
						<th>#</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Age</th>
						<th>City</th>
						<th>Country</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>1</td>
						<td>Anna</td>
						<td>Pitt</td>
						<td>35</td>
						<td>New York</td>
						<td>USA</td>
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

