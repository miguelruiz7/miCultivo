<?php
session_start(); 
unset($_SESSION["usuario"]);
if(isset($_GET['redirect'])) {
 header('Location: '.base64_decode($_GET['redirect']));  
} else {
 header('Location:login');  
}
?>