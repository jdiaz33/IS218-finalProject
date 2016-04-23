
	<?php
	  class loginView {
	    
	    public function getLoginPage() {
	      
	      $page = '<!DOCTYPE html>
	        <html lang="en">
	        <head>
		  <meta charset="utf-8">
		  <title>IS 218 Login</title>
		  <meta http-equiv="x-ua-compatible" content="ie=edge">
		  <meta name="viewport" content="width=device-width,
		  initial-scale=1">
		  <link rel="stylesheet" href="css/main.css">
		  <link rel="stylesheet" href="css/login.css">
		</head>
		<body>
		  <div class="container">
		    <section id="content">
		      <form action="">
		        <h1>Login Form</h1>
			<div>
			  <input type="text" placeholder="Username" required=""
			  id="username" />
			</div>
			<div>
			  <input type="password" placeholder="Password" required=""
			  id="password" />
			</div>
			<div>
			  <input type="submit" value="Log in" />
			  <a href="#">Lost your password?</a>
			  <a href="#">Register</a>
			</div>
		      </form>
		      <div class="button">
		        <a href="#">Download sourcefile</a>
		      </div>
		    </section>
		  </div>
		</body>
	      </html>';

	      return $page;
	    }
	  }
