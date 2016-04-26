
	<?php
	  class homepageView {
	    
	    public function getHeader() {

	      session_start();

	      $pageHeader = '<!DOCTYPE html>
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
		 	 	table th {
		 	 	  background-color: #003366;
		 	 	  color: white;
		 	 	  padding: 10px;
		 	 	  border: 1px solid black;
		 	 	}
		 	 	table td  {
		 	 	  padding: 10px;
		 	 	  text-align: center;
		 	 	}
		 	  </style>
		 	</head>
		 	<body>';
		 		            
	      return $pageHeader;
	    }
	    
	    
	    public function getNavBar() {
	      
	      $navBar = '
	        <div>
	         <img src="img/navy-background.png" alt="navy">
	        </div>
	      ';
	      
	      return $navBar;
	    }
	    
	    
	    public function getUserInventory($keys, $result) {
	    
	      $userInventory = '
	      <div class="container">
		 	    <h1>MY CARS</h1>
		 	    <table>
		 	      <thead>
		 	        <tr>';
		 	          for($i=0; $i<count($keys); $i++){
		 	            if($keys[$i] != 'UserId') {
		 	              $userInventory .= '<th>'.$keys[$i].'</th>';
		 	            }
		 	          }
		 	          $userInventory .= '</tr>
		 	      </thead>
		 	      <tbody>';
		 	        foreach($result as $record) {
		 	          $userInventory .= '<tr>';
		 	          for($i=0; $i<count($record); $i++) {
		 	            if($keys[$i] != 'UserId') {
		 	              $userInventory .= '<td>'.$record[$keys[$i]].'</td>';
		 	            }
		 	          }
		 	        }
		 	      $userInventory .= '</tbody>
		 	    </table>
		 	  </div>';
		 	  
		 	  return $userInventory;
	    }
	    
	    
	    public function getCarInventory($keys, $result) {
			
		  session_start();
		  
	      $carInventory = '
		   			<div class="container">
		   			  <h1>CAR INVENTORY</h1>
		   				<table>
		   					<thead>
		   						<tr>';
		   							for($i=0; $i<count($keys); $i++){
		   								if($keys[$i] != 'UserId') {
		   									$carInventory .= '<th>'.$keys[$i].'</th>';
		   								}
		   							}
		   	   $carInventory .='</tr>
		   					</thead>
		   					<tbody>';
		   							foreach($result as $record) {
		   								$carInventory .= '<tr>';
		   								for($i=0; $i<count($record); $i++) {
		   									if($keys[$i] != 'UserId') {
		   										$carInventory .= '<td>'.$record[$keys[$i]].'</td>';
		   									}
		   								}
		   								$carInventory .= '</tr>';
		   							}
		   		   $carInventory .='</tbody>
		   				</table>
		   			</div>
		   			<div>
		   			  <a href="classes/logout.php">Logout</a>
		   			</div>';

	      return $carInventory;
	    }
	    
	    
	    public function getFooter() {
	      
	      $footer = '</body>
	        </html>';
	      
	      return $footer;
	    }
	 }
