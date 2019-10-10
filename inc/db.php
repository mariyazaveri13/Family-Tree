<?php
/**
 * Database Config
 */
define("DBNAME", "familytree");
define("DBUSER", "root");
define("DBPASS", "");
define("DBHOST", "localhost");

/**
 * Database Connection
 */
try{
    $db = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME , DBUSER, DBPASS);
} catch(PDOException  $e) {
    echo "Error!: " . $e->getMessage();
    die();
}