<?php
require("func.php");
require("value.php");
$db = mysqli_connect("localhost","username","password") or die("can't connect this database");
mysqli_select_db($db, "network");
mysqli_set_charset($db, 'utf8');
