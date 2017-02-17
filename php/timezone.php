<?php
session_start();
$timezone = $_GET['time'];

//$tz = timezone_name_from_abbr($timezone_abbr);
//if($tz === false) $tz = timezone_name_from_abbr($timezone_abbr);
date_default_timezone_set($timezone);

$_SESSION['time'] = $timezone;
?>
