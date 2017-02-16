<?php
$cookie_name = 'mlb_team_openingday';

if(!isset($_COOKIE[$cookie_name])) {
      echo 'Cookie with name "' . $cookie_name . '" does not exist...';
} else {
      echo 'Cookie with name "' . $cookie_name . '" value is: ' . $_COOKIE[$cookie_name];
}

?>
