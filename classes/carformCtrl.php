<?php
 
 class carformCtrl extends controller {
  
  public function get() {
   
   session_start();
   
   $carform = new carformView;

   $pageHeader = $carform->getHeader();
   $this->html .= $pageHeader;

   $navBar = $carform->getNavBar();
   $this->html .= $navBar;
   
   $body = $carform->getBody();
   $this->html .= $body;

   $footer = $carform->getFooter();
   $this->html .= $footer;
  }

  public function post() {
   session_start();
   
   $ch = curl_init();

   curl_setopt($ch, CURLOPT_URL,
   "https://api.edmunds.com/api/vehicle/v2/vins/1FAHP26W49G252740?fmt=json&api_key=u48d7aetdk4yz6pwqnzd62ez");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $output = curl_exec($ch);

   curl_close($ch);
   
   $response = json_decode($output);
   print_r($response);
   echo '<br>'.$response->make->name;
   echo '<br>'.$response->model->name;
   echo '<br>'.$response->years[0]->year;
    
  }

  public function put() {}
  public function delete() {}

 }
