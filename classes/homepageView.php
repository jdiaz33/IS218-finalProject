
	<?php
	  class homepageView {
	    
	    public function getPage($result) {

	      $page = '<!DOCTYPE html>
	        <html lang="en">
	        	<head>
		  			<meta charset="utf-8">
		  			<title>IS 218 Login</title>
		  			<meta http-equiv="x-ua-compatible" content="ie=edge">
		  			<meta name="viewport" content="width=device-width, initial-scale=1">
		  			<link rel="stylesheet" href="css/main.css">
		 	 		<link rel="stylesheet" href="css/login.css">
				</head>
		   		<body>
		   			<div class="container">';
		   				if ($result->num_rows > 0) {
		   					while($row = $result->fetch_assoc()) {
		   						print_r($row);
		   					}
		   				}
		   $page .='</div>
		   		</body>
		   	</html>';

	      return $page;
	    }
	 }
