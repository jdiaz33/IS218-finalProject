
	<?php
	  class loginView {
	    
	    public function getLoginPage() {
	    
	      if($_GET['form']) {
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
		      <form id="login" action="index.php?controller=loginCtrl"
		      method="post">
		        <h1>Register Form</h1>
			<div>
			  <input type="text" placeholder="Username" required=""
			  id="username" name="username" />
			</div>
			<div>
			  <input type="password" placeholder="Password" required=""
			  id="password" name="password"/>
			</div>
			<div>
			  <input type="password" placeholder="Confirm Password"
			  required="" id="password" name="password2"/>
			</div>

			<div>
			  <input type="submit" value="Register" />
			  <a href="index.php">Log in</a>
			</div>
		      </form>
		    </section>
		  </div>
		</body>
	      </html>';

	      return $page;


	      }
	      else {
	      
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
		      <form id="login" action="index.php?controller=loginCtrl"
		      method="post">
		        <h1>Login Form</h1>
			<div>
			  <input type="text" placeholder="Username" required=""
			  id="username" name="username" />
			</div>
			<div>
			  <input type="password" placeholder="Password" required=""
			  id="password" name="password"/>
			</div>
			<div>
			  <input type="submit" value="Log in" />
			  <a href="index.php?form=register">Register</a>
			</div>
		      </form>
		    </section>
		  </div>
		</body>
	      </html>';

	      return $page;
	      }
	    }
	  }
