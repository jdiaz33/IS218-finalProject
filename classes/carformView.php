<?php
 class carformView {
  
  public function getHeader() {
   session_start();
  
   $pageHeader = '<!DOCTYPE html>
    <html lang="en">
     <head>
      <meta charset="utf-8">
      <title>Car Form</title>
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/login.css">
     </head>
    
     <body>';
    
     return $pageHeader;
  }
 
  public function getNavBar() {
   $navBar = '
    <div style="background-image: url(img/navy-background.png); width:85%; margin:auto; border:2px solid; border-radius:5px">
     <div class="container">
      <h1 style="color:white">WELCOME</h1>
      <h3 style="color:white">'.$_SESSION['login_user'].'</h3>
     </div>
    </div>';
  
   return $navBar;
  }
  
  public function getFooter() {
    $footer = '</body>
     </html>';
     
    return $footer;
   }
 }