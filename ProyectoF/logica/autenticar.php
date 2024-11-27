<?php
session_start();
$usuario= $_SESSION['usermane'];//413112576


if(!isset($usuario)){

        header("location: index.php");
}
?>
