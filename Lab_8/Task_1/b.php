<?php

// task 1 ## b
// To get the name of the owner of the current PHP script,
// document root directory under which the current script is
// running and the operating system PHP is running on.
echo "Owner: " . get_current_user() . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Operating System: " . php_uname() . "<br>";

?>