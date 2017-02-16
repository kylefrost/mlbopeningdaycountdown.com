$("#setTeamForm").submit(function(e) {
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "/php/set_team_cookie.php",
        data: $("#setTeamForm").serialize(),
        success: function(response) {
            console.log(response);
            if (response.success) {
                console.log(response.team);
                window.location = "/";
            } else {
                console.log(response.error);
            }
        },
        error: function(response) {
            console.log(response);
        }
    });
});
