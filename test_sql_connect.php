<?php
define('DB_SERVER', getenv('DB_SERVER'));
define('DB_USERNAME', getenv('DB_USERNAME'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_DATABASE', getenv('DB_DATABASE'));
echo DB_SERVER;
echo "\n";
echo DB_DATABASE;
echo "\n";
echo DB_USERNAME;
echo "\n";
echo DB_PASSWORD;
echo "\n";
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$connection) {
    echo "false connection";
    exit;
}

// Use the $connection object to interact with the database
echo "Connection successful!";
?>
