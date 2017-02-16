<!DOCTYPE html>
<html>
    <head>
        <title>Set Your Team</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="css/style.css" rel="stylesheet"> 
    </head>
    <body>
        <div class="wrap">
        <form id="setTeamForm">
        Pick your team!
        <select name="team">
            <?php include('team_array.php'); ?>
            <?php foreach($team as $name => $value): ?>
                <option value="<?php echo $value; ?>"><?php echo $name; ?></option>
            <?php endforeach; ?>
        </select>
        <br /><br />
        <button type="submit" id="submit">Submit</button>
        </form>
        <br /><br />
        <div style="font-size: 10px;opacity: 0.5;">Note: This site uses cookies to remember which team you choose.<br />Please enable them to use this countdown.</div>
        </div>
        <script src="/js/set_team.js"></script>
        <script src="/js/google.js"></script>
    </body>
</html>
