<?php>
function dbconnct() {
    static $connect =null;

    if ($connect === null){
        $connect = mysqli_connect('localhost','root','','finance_db');
    }
    if (!$connect){
        die('Connection failed: ' . mysqli_connect_error());
    }

    return $connect;
}
?>