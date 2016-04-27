<?php
  class carformCtrl extends controller {
    public function get() {
     session_start();
     
     $carForm = new carformView;
     
     $pageHeader = $carForm->getHeader();
     $this->html .= $pageHeader;
     
     $navBar = $carForm->getNavBar();
	 $this->html .= $navBar;
	 
	 $footer = $carForm->getFooter();
	 $this->html .= $footer;
    }
    public function post() {}
    public function put() {}
    public function delete() {}
  }