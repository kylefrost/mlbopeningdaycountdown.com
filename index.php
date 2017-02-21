<?php
    $cookie_name = 'mlb_team_openingday';
    $get_team = $_GET['team'];


    include('php/team_info.php');

    if(isset($_GET['team'])) {
        $team = $get_team;

        if(!array_key_exists($team, $team_info)) {
            include('404/index.php');
        }

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
