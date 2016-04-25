
	<?php

	  class loginCtrl extends controller {
	    
	    public function get() {
	      
	      $login = new loginView;

	      $loginPage = $login->getLoginPage();
	      $this->html .= $loginPage;
	    }

	    public function post() {
	      
	      define('DB_SERVER', 'sql1.njit.edu');
	      define('DB_USERNAME', 'jld33');
	      define('DB_PASSWORD', 'CsjGVvOb');
	      define('DB_DATABASE', 'jld33');
	      $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	      if($_POST['form'] == login) {
	      
	        $myusername = mysqli_real_escape_string($db,$_POST['username']);
	        $mypassword = mysqli_real_escape_string($db,$_POST['password']);
		
	        $sql = "SELECT Username FROM User WHERE Username = '$myusername' and
	        Password = '$mypassword'";
	        $result = mysqli_query($db, $sql);
	        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	      
	        #$active = $row['active'];
	        $count = mysqli_num_rows($result);
	      
	// If result matched $myusername and $mypassword, table row must be 1 row
	        if($count == 1) {
	          session_start();
		
		  #session_register("myusername");
		  $_SESSION['login_user'] = $myusername;
		  print_r($_SESSION);
		  #header("location: index.php?controller=homepageCtrl");
	        }
	        else {
		  $error = "your Login Name or Password is invalid";
	          echo $error;
	        }
	      }
	      else {
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']);
		$mypassword2 = mysqli_real_escape_string($db,$_POST['password2']);

		if($mypassword == $mypassword2) {
		  $sql = "INSERT INTO User (Username, Password) VALUES
		  ('$myusername', '$mypassword')";
		  if($db->query($sql) === TRUE) {
		    echo "New record created successfully";
		  }
		  else {
		    echo "Error: " . $sql . "<br>" . $db->error;
		  }
		}
	      }
	    }

	    public function put() {}
	    public function delete() {}
	  }
