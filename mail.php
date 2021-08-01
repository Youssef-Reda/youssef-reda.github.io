<?php
  if(isset($_POST['sendEmail'])) {
    $privateKey = "6LddIdEbAAAAAOmVWrvAMAAnCVJxB11EHI1-XZ5H";
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $check = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$privateKey&response=$response&remoteip=$remoteip");

    $status = json_decode($check, true);

    // if($status["success"] === true) {
    // }
  }
?>
