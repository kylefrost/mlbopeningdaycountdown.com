<?php
    $cookie_name = 'mlb_team_openingday';
    $get_team = $_GET['team'];

    if(isset($_GET['team'])) {
        $team = $get_team;
        include('php/countdown.php');
    } else {
        if(isset($_COOKIE[$cookie_name])) {
            $team = $_COOKIE[$cookie_name];
            include('php/countdown.php');
        } else {
            include('php/set_team.php');
        }
    }
?>
