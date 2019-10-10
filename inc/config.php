<?php
/**
 * Path config
 */
$url = explode("/", $_SERVER['SCRIPT_NAME']) ;
array_pop($url);
define("URL", "//".$_SERVER['SERVER_NAME'].implode("/",$url));
define("DIRPATH", dirname(__FILE__));
define("IMG", URL."/img/");
define("AVATAR", "avatar.png");
define("ACTIVE", 1);
define("DEACTIVE", 0);
define("USERROLE", "user");
define("ADMINROLE", "admin");
define("CONTACTEMAIL", "yasht096@gmail.com");