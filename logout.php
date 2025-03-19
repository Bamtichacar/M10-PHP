<?php
setcookie("mesPrefs","", time() -3600);
session_start();
session_unset();
session_destroy();
echo"<meta http-equiv = 'refresh' content = '5;URL=login.php'>";
echo"click <a href = login.php>Login</a>";