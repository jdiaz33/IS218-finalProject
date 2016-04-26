
	<?php
	  class homepageCtrl extends controller {
	    
	    public function get() {
	      
	      session_start();
	      
	      define('DB_SERVER', 'sql1.njit.edu');
	      define('DB_USERNAME', 'jld33');
	      define('DB_PASSWORD', 'CsjGVvOb');
	      define('DB_DATABASE', 'jld33');
	      $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	      
	      $sql = "SELECT * FROM carInventory";
	      $result = mysqli_query($db, $sql);
	      $row = $result->fetch_assoc();
	      $keys = (array_keys($row));
	      	     
	      $homepage = new homepageView;
	      $inventoryTable = $homepage->getCarInventory($keys, $result);
	      $this->html .= $inventoryTable;
	    }

	    public function post() {}
	    public function put() {}
	    public function delete() {}
	  }
