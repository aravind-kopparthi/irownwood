<?php
//Database configuration

define('HOST', 'databases-auth.000webhost.com');
define('USERNAME', 'id4502750_admin');
define('PASSWORD', 'admin123');
define('DATABASE_NAME', 'id4502750_ironwooddb');
echo "Connecting...."
//Connect with the database
$db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE_NAME);
if($db->connect_errno):
    die('Connect error:'.$db->connect_error);
else
  echo "connection successful"
endif;
?>
