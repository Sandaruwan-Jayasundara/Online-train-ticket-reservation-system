<?php
$cookie_name = "email";
setcookie($cookie_name, "", time() - (86400 * 30), "/");
//setcookie("email", "", time() - 3600);
echo "<script>
		window.location.href='index.html';
		</script>";
?>