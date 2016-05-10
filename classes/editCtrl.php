<?php
  
  class editCtrl extends controller {
  
    public function get() {
    
      session_start();
      
      $editPage = new editView;
      
      $pageHeader = $editPage->getHeader();
   	  $this->html .= $pageHeader;
   	  
   	  $navBar = $editPage->getNavBar();
      $this->html .= $navBar;
      
      $vin = $_GET['vin'];
      //set cURL to call Edmunds API
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,
      "https://api.edmunds.com/api/vehicle/v2/vins/$vin?fmt=json&api_key=u48d7aetdk4yz6pwqnzd62ez");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $output = curl_exec($ch);
      curl_close($ch);
      
      //response from cURL calling the Edmunds API
      $response = json_decode($output);
      
      $body = $editPage->getBody($response);
      $this->html .= $body;
      
      $footer = $editPage->getFooter();
      $this->html .= $footer;
    
    }
    
    public function post() {}
    
    public function put() {}
    public function delete() {}
    
  }