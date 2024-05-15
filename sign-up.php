
<?php

include_once("config.php");
include_once("signup.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Log in</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans+Display%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans%3A400"/>
  <link rel="stylesheet" href="./styles/sign-up.css"/>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post"  >


<div class="log-in-ib1">
  <img class="icon-0-jm1" src="./assets/icon-0.png"/>
  <div class="auto-group-h19r-3Fu">
    <p class="behealthy-wVh">BeHealthy</p>
    <div class="frame-11-Ezb">
      <p class="sign-up-a2s">Sign Up</p>
      <input class="auto-group-mwkp-Ue3" type="email" name="username" placeholder="abc@gmail.com" required>
      <div class="auto-group-f2tq-J7H">
        <input class="password-b6P" name="pass" placeholder="Password" type="password" required>
        <!-- <img class="ph-eye-light-Wj9" src="./assets/ph-eye-light.png"/> -->
      </div>
      <div class="auto-group-sldd-pE3">
        <input class="re-type-password-iaK" name="repass" placeholder="Re-type Password">
        <img class="ph-eye-light-3Mh" src="./assets/ph-eye-light-Jcf.png"/>
      </div>
      <div class="auto-group-zg7h-MNP">
        <input type="checkbox" class="checkbox"><p class="Remember">Remember me</p>
      </div>
      <input class="auto-group-dbfm-Lk7" type="submit" name="submit" value="SignUp">
      <div class="auto-group-5wuk-odh">
        <img class="line-5-jXM" src="REPLACE_IMAGE:2:181"/>
        <p class="or-TTM">OR</p>
        <img class="line-6-bJf" src="./assets/line-6.png"/>
      </div>
      <div class="auto-group-9rbh-jQs">
        <img class="google-F8K" src="./assets/google.png"/>
        <a class="sign-in-with-google-BXm" href="#">Sign in with Google</a>
      </div>
    </div>
  </div>
  <div class="line-7-UFy">
  </div>
  <img class="group-9655-zEK" src="./assets/group-9655.png"/>
</div>

</form>
</body>