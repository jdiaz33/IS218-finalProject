<?php
 class editView {
 
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
      <h3 style="color:white">'.$_SESSION['login_user'].'</h3>
     </div>
    </div>';
  
   return $navBar;
  }
  
  
  public function getBody($car) {
    $body = '
     <br><br><br>
     <div style="width:60%; margin:auto; background-color:#003366;
     border-radius:5px; border: 2px solid black; padding:15px; padding-bottom:40px">
      <h2 style="color:white">'.$car->make->name.'&nbsp'.$car->model->name.'</h2>
      <br>
      <div style="width:70%; margin:auto; text-align:center">
       <form action="index.php?controller=editCtrl" method="post">
        <input type="text" placeholder="New Price" name="vin" style="width:50%;
	height:30px;
        background-color:gray; border:2px solid black; font-size:20px; color:white;
        padding:5px; border-radius:5px">
	<br><br><br>
	<button type="submit" style="background-color:gray; color:white;
	font-weight:bold; font-size:19px; width:120px; height:35px; border:2px solid
	black; border-radius:5px">Submit</button>
       </form>
       <br>
       <form action="index.php?controller=editCtrl&action=delete" method="post">
         <button type="submit" style="background-color:#cc0000; color:white; font-weight:bold; font-size:19px; width:220px; height:35px; border:2px solid black; border-radius:5px">Delete Car</button>
       </form>
      </div>
     </div>
     <div class="container">
      <img src="img/luxuryCars.png" alt="luxury" width="100%">
     </div>';

    return $body;
  }

  
   public function getFooter() {
    $footer = '</body>
     </html>';
     
    return $footer;
   }
 }