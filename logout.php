<?php
require_once "util/db.php";
session_start();
session_destroy();
header("location:index.html");
?>