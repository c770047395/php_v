<?php
require_once "util/db.php";
$sessionId = $_COOKIE['sessionId'];
setcookie("sessionId","",time()-1);
$redis->del($sessionId);
header("location:index.html");
?>