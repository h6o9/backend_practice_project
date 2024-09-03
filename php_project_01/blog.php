 <?php
 require 'function.php';
 require 'db.php';

 use BLOG\DB;


 $conn = DB\connect($config);

if (!$conn) {
    die('Problem connecting to the db.');
}

 ?>