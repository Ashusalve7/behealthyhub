
<?php

include_once("config.php");
include_once("login.php");
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
  <link rel="stylesheet" href="./styles/log-in.css"/>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

<div class="log-in-KE7">
  <img class="icon-0-uy1" src="./assets/icon-0.png"/>
  <div class="auto-group-6aqp-qLs">
    <p class="behealthy-x47">BeHealthy</p>
    <div class="frame-11-eBq">
      <p class="sign-in-to-continue-NNj">Sign in to continue </p>
      <div class="auto-group-5tzv-GU7">
        <img class="google-xbq" src="./assets/google.png"/>
        <a class="sign-in-with-google-gnj" href="" style="text-decoration: none;">Sign in with Google</a>
      </div>
      <div class="auto-group-xnum-xVM">
        <img class="line-5-uQb" src="REPLACE_IMAGE:1:21"/>
        <p class="or-use-email-Rtj">OR USE EMAIL</p>
        <img class="line-6-ALX" src="REPLACE_IMAGE:1:22"/>
      </div>
      <input  placeholder="abc@gmail.com" name="username" class="auto-group-guzp-6V5" type="email" required>
      <div class="auto-group-kfcs-Yby">
        <input class="password-euu" placeholder="Password" type="password" name="pass" required>
    
      </div>
      <div class="auto-group-3bs7-7Hh">
       
        <input type="checkbox" class="remember-me-AWs"> <p class="Remember">Remember me</p>
        <br>
        <div> 
          <a class="forget-password-J7H" href="#" style="padding-left: 20px;">Forget Password</a>
         
        </div>
       
      </div>
      <input type="submit" class="auto-group-qjmd-Rxb"name="login" value="Login">
      <p class="dont-have-an-account-sign-up-trB">
        <span class="dont-have-an-account-sign-up-trB-sub-0">Don’t have an account?  </span>
        <a class="dont-have-an-account-sign-up-trB-sub-1" href="sign-up.php">Sign Up</a>
      </p>
    </div>
  </div>
  <div class="line-7-5pB">
  </div>
  <img class="group-9654-bnX" src="./assets/group-9654.png"/>
</div>

</form>
</body>

