<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
        <!-- Add your site or application content here -->
        

	<?php
	  class loginCtrl extends controller {
	    
	    public function get() {
	      
	      $login = new loginView;

	      $header_html = $login->getHeader();
	      $this->html .= $header_html;
	    }

	    public function post() {}
	    public function put() {}
	    public function delete() {}
	  }
	?>
        
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
<?php