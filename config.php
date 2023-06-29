<?php
mysqli_report(MYSQLI_REPORT_OFF);
error_reporting(0);

define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "2asd65xc8748");

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);