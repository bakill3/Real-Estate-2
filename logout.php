<?php 
include 'header_main.php'; 
unset($_SESSION['login']);
include 'footer_main.php'; 
echo "<script>window.location.href='index.php'</script>";
?>