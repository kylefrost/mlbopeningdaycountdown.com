<?php

$cookie_name = 'mlb_team_openingday';
$team_value = $_POST['team'];

$error = '';
$success = false;

try {
    setcookie($cookie_name, $team_value, time() + (86400 * 30), '/');
    $success = true;
} catch(Exception $e) {
    $error = 'Message: ' . $e->getMessage();
}

header('Content-Type: application/json');
echo json_encode(array('error' => $error, 'success' => $success, 'team' => $team_value));

?>
