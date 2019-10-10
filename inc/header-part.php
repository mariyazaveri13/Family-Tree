<?php
/**
 * session start and check user is login or not
 */
session_start();
if(!isset($_SESSION['userId']))
{
  header("Location: index.php#login-signup-section");
}
require_once('inc/config.php');
require_once('inc/model.php');
?>
<!-- FIRST REUSABLE PART-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Clan</title>
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
	  <link rel="stylesheet" href="assets/css/shared/style.css">
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/favicon.png" />
	 <!-- END OF FIRST RESUABLE PART -->