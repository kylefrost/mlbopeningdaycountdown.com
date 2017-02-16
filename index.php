<?php
    $cookie_name = 'mlb_team_openingday';
    
    if(isset($_COOKIE[$cookie_name])) {
        include('php/countdown.php');
    } else {
        include('php/set_team.php');
    }
?>
