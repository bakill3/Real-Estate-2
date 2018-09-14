<?php
if (!isset($_SESSION['login'])) {
	echo "<script>window.location.href='index.php'</script>";
}
?>