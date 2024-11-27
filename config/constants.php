
<?php
session_start();


define('SITEURL', 'http://localhost/web-design-course-restaurant-master/');
$host = "localhost";
$fullname = "root";
$password = "";
$dbname = "food-oder";

$conn = new mysqli ( $host, $fullname, $password, $dbname);

if( $conn->connect_error ){
    die("kết nối không thành công".$conn->connect_error);
}
?>