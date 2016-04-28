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
   
   //VIN from the post form
   $vin = $_POST['vin'];
   
   //set cURL to call Edmunds API
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,
   "https://api.edmunds.com/api/vehicle/v2/vins/$vin?fmt=json&api_key=u48d7aetdk4yz6pwqnzd62ez");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $output = curl_exec($ch);
   curl_close($ch);
   
   //response from cURL calling the Edmunds API
   $response = json_decode($output);
   
   //setup data to make the DB query
   $userid = $_SESSION['user_id'];
   $make = $response->make->name;
   $modle = $response->model->name;
   $year = $response->years[0]->year;
  }

  public function put() {}
  public function delete() {}

 }
