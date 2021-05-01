<?php
$cookie_value = "This is a cookie";
setcookie("example", $cookie_value, time() + 500);
?>

<html>

<body>
    <?php echo $_COOKIE['example']; ?>
</body>

</html>