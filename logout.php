<?php
session_start();
session_destroy();
if(!isset($_SESSION['logged_in'])){
    header("Location:Login.php");
}
?>