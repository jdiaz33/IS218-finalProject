<?php
  
  class editCtrl extends controller {
  
    public function get() {
    
      session_start();
      
      $editPage = new editView;
      
      $pageHeader = $editPage->getHeader();
   	  $this->html .= $pageHeader;
   	  
   	  $navBar = $editPage->getNavBar();
      $this->html .= $navBar;
      
      $body = $editPage->getBody();
      $this->html .= $body;
      
      $footer = $editPage->getFooter();
      $this->html .= $footer;
    
    }
    
    public function post() {}
    
    public function put() {}
    public function delete() {}
    
  }