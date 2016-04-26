
	<?php
	  class homepageView {
	    
	    public function getPage($keys, $result) {
			
		  session_start();
		  
	      
	      $page = '<!DOCTYPE html>
	        <html lang="en">
	        	<head>
		  			<meta charset="utf-8">
		  			<title>Home</title>
		  			<meta http-equiv="x-ua-compatible" content="ie=edge">
		  			<meta name="viewport" content="width=device-width, initial-scale=1">
		  			<link rel="stylesheet" href="css/main.css">
		 	 		<link rel="stylesheet" href="css/login.css">
		 	 		
		 	 		<style>
		 	 			table {
		 	 				width: 100%;
		 	 				background-color: #003366;
		 	 				border-collapse: collapse;
		 	 			}
		 	 			table tr:nth-child(even) {
    						background-color: #e6e6e6;
						}
						table tr:nth-child(odd) {
  	 						background-color:#cccccc;
						}
						table th	{
							background-color: #003366;
    						color: white;
    						padding: 10px;
    						border: 1px solid black;
   						}
   						table td	{
   							padding: 10px;
   							text-align: center
   						}
					</style>
				</head>
		   		<body>
		   			<div class="container">
		   				<table>
		   					<thead>
		   						<tr>';
		   							for($i=0; $i<count($keys); $i++){
		   								$page .= '<th>'.$keys[$i].'</th>';
		   							}
		   			   $page .='</tr>
		   					</thead>
		   					<tbody>';
		   							foreach($result as $record) {
		   								$page .= '<tr>';
		   								for($i=0; $i<count($record); $i++) {
		   									$page .= '<td>'.$record[$keys[$i]].'</td>';
		   								}
		   								$page .= '</tr>';
		   							}
		   		   $page .='</tbody>
		   				</table>
		   			</div>
		   		</body>
		   	</html>';

	      return $page;
	    }
	 }
