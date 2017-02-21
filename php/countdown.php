<?php include('time.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Opening Day Countdown</title>
        <?php include('head.php'); ?>
    </head>
    <body style="background-color: <?php echo $team_info[$team]['colors']['bg'] ?>;color: <?php echo $team_info[$team]['colors']['text'] ?>;">
        <div class="wrap">
            <div id="main-text">
                <span id="month"><?php echo (isset($timezone) ? date_format($team_info[$team]['date']->setTimezone(new DateTimeZone($timezone)), 'm') : "00"); ?></span><span id="divider1">.</span><span id="day"><?php echo (isset($timezone) ? date_format($team_info[$team]['date']->setTimezone(new DateTimeZone($timezone)), 'd') : "00"); ?></span><span id="divider2">.</span><span id="year"><?php echo (isset($timezone) ? date_format($team_info[$team]['date']->setTimezone(new DateTimeZone($timezone)), 'y') : "00"); ?></span>
            </div>
            <div id="countdown">
                <span class="container">
                    <months>00</months>
                    <label id="monthLabel">MONTHS</label>
                </span>
                <span class="container">
                    <weeks>00</weeks>
                    <label id="weekLabel">WEEKS</label>
                </span>
                <span class="container">
                    <days>00</days>
                    <label id="dayLabel">DAYS</label>
                </span>
                <span class="container">
                    <hours>00</hours>
                    <label id="hourLabel">HOURS</label>
                </span>
                <span class="container">
                    <minutes>00</minutes>
                    <label id="minuteLabel">MINUTES</label>
                </span>
                <span class="container">
                    <seconds>00</seconds>
                    <label id="secondLabel">SECONDS</label>
                </span>
            </div>
        </div>
        <a id="change_team" style="color: <?php echo $team_info[$team]['colors']['text'] ?>;" href="/change_team">Change Team</a>
        <script>
            function paramExists(param) {
                var url = window.location.href;
                if(url.indexOf('?' + param + '=') != -1)
                        return true;
                else if(url.indexOf('&' + param + '=') != -1)
                        return true;
                return false
            }

            if(!paramExists('team')) {
                window.location = window.location + "?team=<?php echo $team; ?>";
            }

            $(document).ready(function() {
                if("<?php echo $timezone; ?>".length == 0) {
                    var timezone = jstz.determine().name();
                    console.log(timezone);
                    $.ajax({
                        type: "GET",
                        url: "/php/timezone.php",
                        data: 'time='+ timezone,
                        success: function() {
                            location.reload();
                        }
                    });
                } else {
                    console.log("The PHP $timezone is <?php echo $timezone; ?>");
                }
            });

            var end = "<?php echo (isset($timezone) ? date_format($team_info[$team]['date']->setTimezone(new DateTimeZone($timezone)), 'Y-m-d H:i:s P') : "00:00:00"); ?>"; 
        </script>
        <script src="js/main.js"></script>
        <script src="js/google.js"></script>
    </body>
</html>
