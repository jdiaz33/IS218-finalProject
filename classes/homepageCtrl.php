
	<?php
	  class homepageCtrl extends controller {
	    
	    public function get() {
	      
	      session_start();
	      
	      define('DB_SERVER', 'sql1.njit.edu');
	      define('DB_USERNAME', 'jld33');
	      define('DB_PASSWORD', 'CsjGVvOb');
	      define('DB_DATABASE', 'jld33');
	      $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	      
	      $sql = "SELECT * FROM carInventory WHERE 1";
	      $result = mysqli_query($db, $sql);
	      
	      	      
	      $homepage = new homepageView;

	      $page = $homepage->getPage($result);
	      $this->html .= $page;
	    }

	    public function post() {}
	    public function put() {}
	    public function delete() {}
	  }
