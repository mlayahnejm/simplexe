
<?php

/**
 * Configuration for database connection
 *
 */

$host       = "simpleweb-bdd";
$username   = "root";
$password   = "azerty";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
