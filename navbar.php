<?php 
require_once('controller.php');
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="seeds">
  <meta name="description" content="just click">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">



  <!-- Custom -->
  <link rel="icon" href="img/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/custom.css">
  <link href="https://fonts.googleapis.com/css?family=KoHo" rel="stylesheet">

  <title>Bit of chance</title>
</head>

<body cz-shortcut-listen="true" class="">

 <div class="ad-placement" id="ablockercheck"></div>
 <div id="ablockermsg" style="display: none">
   <div class="unblock">
     Please turn off Adblock
   </div>
 </div>

 <header>


  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand  " href="index.php"> Bit of chance</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" aria-expanded="false" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="howTo.php">How to play</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rewards.php">Rewards</a>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
          </li> -->
         <!--  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle disabled" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="aboutUs.php">Us</a>
              <a class="dropdown-item" href="privacy.php">Privacy Policy</a>
              <a class="dropdown-item" href="termsConditions.php">Terms and Conditions</a>
              <a class="dropdown-item" href="disclaimer.php">Disclaimer</a>
              <a class="dropdown-item" href="contact.php">Contact</a>
            </div>
          </li> -->

          <li class="nav-item">
            <button id="signIn" class="btn btn-warning px-3" data-toggle="modal" data-target="#modalLogin">Buy chances</button>
          </li>
        </ul>
      </div>

    </div>
  </nav> 

  <!-- Modal Sign in -->
  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title" id="signInModal">Buy chances</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
     
        <div class="modal-body input-group">
          
        
            <div class="input-group-prepend">

              <span class="input-group-text" id="basic-addon1"><i class="fab fa-bitcoin"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="wallet adress" aria-label="e-mail" aria-describedby="basic-addon1">
          

        </div>

        <div class="row">
          <div class="col-md-4 my-1 ml-3">
         
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Choose </option>
            <option value="1">1 Chance</option>
            <option value="2">3 Chances</option>
            <option value="3">5 chances</option>
          </select>
        </div>
        <div class="col-md-6 my-1">
         
         <p>Each chance costs 10 Satoshis </p>
        </div>
        </div>

        <div class="col-auto mt-3 ml-1">

          <p><b>You will spend <span>$sumChances</span> satoshis</b></p>
        </div>



        <div class="modal-footer">
          <button type="button" class="btn btn-warning px-5" data-dismiss="modal">Buy!</button>
        </div>
      </div>
    </div>
  </div>
  <!-- modal end -->

</header>
