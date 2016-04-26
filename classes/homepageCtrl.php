
	<?php
	  class homepageCtrl extends controller {
	    
	    public function get() {
	      
	      session_start();
	      //print_r($_SESSION);
	      define('DB_SERVER', 'sql1.njit.edu');
	      define('DB_USERNAME', 'jld33');
	      define('DB_PASSWORD', 'CsjGVvOb');
	      define('DB_DATABASE', 'jld33');
	      $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	      
	      $sql = "SELECT * FROM carInventory WHERE userId='".$_SESSION['user_id']."'";
	      $result = mysqli_query($db, $sql);
	      $row = $result->fetch_assoc();
	      $keys = (array_keys($row));
	      
	      $homepage = new homepageView;
	      
	      $pageHeader = $homepage->getHeader();
	      $this->html .= $pageHeader;
	      
	      $navBar = $homepage->getNavBar();
	      $this->html .= $navBar;
	      
	      $userInventory = $homepage->getUserInventory($keys, $result);
	      $this->html .= $userInventory;
	      
	      $sql = "SELECT * FROM carInventory";
	      $result = mysqli_query($db, $sql);
	      $row = $result->fetch_assoc();
	      $keys = (array_keys($row));
	      	     	      
	      $inventoryTable = $homepage->getCarInventory($keys, $result);
	      $this->html .= $inventoryTable;
	      
	      $footer = $homepage->getFooter();
	      $this->html .= $footer;
	    }

	    public function post() {}
	    public function put() {}
	    public function delete() {}
	  }
