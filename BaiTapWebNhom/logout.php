<?php
:\xampp\htdocs\BaiTapWebNhom\logout.php
<?php
session_start();
session_destroy();
header("Location: index.php");
exit();