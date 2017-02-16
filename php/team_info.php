<?php

$cookie_name = 'mlb_team_openingday';
$team = $_COOKIE[$cookie_name];

$team_info = array(
    "diamondbacks" => array("date" => new DateTime('2017-04-02 16:10:00 -05:00'), "colors" => array("text" => "#A71930", "bg" => "#D9C89EC")),
    "braves" => array("date" => new DateTime('2017-04-03 13:10:00 -05:00'), "colors" => array("text" => "#BA0C2F", "bg" => "#002855")),
    "orioles" => array("date" => new DateTime('2017-04-03 15:05:00 -05:00'), "colors" => array("text" => "#FC4C00", "bg" => "#000000")),
    "redsox" => array("date" => new DateTime('2017-04-03 14:05:00 -05:00'), "colors" => array("text" => "#C60C30", "bg" => "#002244")),
    "cubs" => array("date" => new DateTime('2017-04-02 20:30:00 -05:00'), "colors" => array("text" => "#C8102E", "bg" => "#002F6C")),
    "whitesox" => array("date" => new DateTime('2017-04-03 16:10:00 -05:00'), "colors" => array("text" => "#FFFFFF", "bg" => "#000000")),
    "reds" => array("date" => new DateTime('2017-04-03 16:10:00 -05:00'), "colors" => array("text" => "#BA0C2F", "bg" => "#FFFFFF")),
    "indians" => array("date" => new DateTime('2017-04-03 19:05:00 -05:00'), "colors" => array("text" => "#D50032", "bg" => "#0C2340")),
    "rockies" => array("date" => new DateTime('2017-04-03 14:10:00 -05:00'), "colors" => array("text" => "#24135E", "bg" => "#000000")),
    "tigers" => array("date" => new DateTime('2017-04-03 16:10:00 -05:00'), "colors" => array("text" => "#FA4614", "bg" => "#0C2340")),
    "marlins" => array("date" => new DateTime('2017-04-03 13:05:00 -05:00'), "colors" => array("text" => "#F9423B", "bg" => "#0482CC")),
    "astros" => array("date" => new DateTime('2017-04-03 20:10:00 -05:00'), "colors" => array("text" => "#FF7F00", "bg" => "#072854")),
    "royals" => array("date" => new DateTime('2017-04-03 16:10:00 -05:00'), "colors" => array("text" => "#74B4FA", "bg" => "#15317E")),
    "angels" => array("date" => new DateTime('2017-04-04 02:05:00 -05:00'), "colors" => array("text" => "#BA032E", "bg" => "#0C2344")),
    "dodgers" => array("date" => new DateTime('2017-04-03 16:10:00 -05:00'), "colors" => array("text" => "#002F6C", "bg" => "#FFFFFF")),
    "brewers" => array("date" => new DateTime('2017-04-03 14:10:00 -05:00'), "colors" => array("text" => "#C4953B", "bg" => "#012143")),
    "twins" => array("date" => new DateTime('2017-04-03 16:10:00 -05:00'), "colors" => array("text" => "#BA0C2E", "bg" => "#0C2341")),
    "mets" => array("date" => new DateTime('2017-04-03 13:10:00 -05:00'), "colors" => array("text" => "#FC4C00", "bg" => "#002D70")),
    "yankees" => array("date" => new DateTime('2017-04-02 13:10:00 -05:00'), "colors" => array("text" => "#808080", "bg" => "#1C2841")),
    "athletics" => array("date" => new DateTime('2017-04-04 02:05:00 -05:00'), "colors" => array("text" => "#FFBE00", "bg" => "#00483A")),
    "phillies" => array("date" => new DateTime('2017-04-03 16:10:00 -05:00'), "colors" => array("text" => "#BA0C2E", "bg" => "#003086")),
    "pirates" => array("date" => new DateTime('2017-04-03 14:05:00 -05:00'), "colors" => array("text" => "#FFC72B", "bg" => "#000000")),
    "cardinals" => array("date" => new DateTime('2017-04-02 20:30:00 -05:00'), "colors" => array("text" => "#C41E3A", "bg" => "#0A2252")),
    "padres" => array("date" => new DateTime('2017-04-03 16:10:00 -05:00'), "colors" => array("text" => "#FFFFFF", "bg" => "#002D62")),
    "giants" => array("date" => new DateTime('2017-04-02 16:10:00 -05:00'), "colors" => array("text" => "#FB5B1F", "bg" => "#000000")),
    "mariners" => array("date" => new DateTime('2017-04-03 20:10:00 -05:00'), "colors" => array("text" => "#1C8B85", "bg" => "#003166")),
    "rays" => array("date" => new DateTime('2017-04-02 13:10:00 -05:00'), "colors" => array("text" => "#79BDEE", "bg" => "#00285D")),
    "rangers" => array("date" => new DateTime('2017-04-03 19:05:00 -05:00'), "colors" => array("text" => "#BD1021", "bg" => "#003279")),
    "bluejays" => array("date" => new DateTime('2017-04-03 15:05:00 -05:00'), "colors" => array("text" => "#FFFFFF", "bg" => "#003DA5")),
    "nationals" => array("date" => new DateTime('2017-04-03 13:05:00 -05:00'), "colors" => array("text" => "#BA122B", "bg" => "#14225A"))
);

?>
