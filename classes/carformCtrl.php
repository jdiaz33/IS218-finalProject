<?php
 
 class carformCtrl extends controller {
  
  public function get() {
   
   session_start();
   
   $carform = new carformView;

   $pageHeader = $carform->getHeader();
   $this->html .= $pageHeader;

   $navBar = $carform->getNavBar();
   $this->html .= $navBar;

   $footer = $carform->getFooter();
   $this->html .= $footer;
  }

  public function post() {}
  public function put() {}
  public function delete() {}

 }
