<?php
$host_name = 'db702351851.db.1and1.com';
$database = 'db702351851';
$user_name = 'dbo702351851';
$password = 'Youbestn0tmiss!';
$connect = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_connect_errno()) {
    die('<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>');
} else {
    echo '<p>Connection to MySQL server successfully established.</p >';
}
?>
