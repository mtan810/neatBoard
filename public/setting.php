<?php

    // configuration
    require("../includes/config.php");

    // query database
    $rows3 = query("SELECT theme, type, username FROM users WHERE id=?", $_SESSION["id"]);
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // if the submit button for choosing the name to post as is pushed
        if (isset($_POST["anony"]))
        {
            // if user chose anon
            if ($_POST["anony"] === 'Anon')
            {
                // store anon
                $rows3[0]["type"] = 'Anon';
            }
            else
            {
                // store the username
                $rows3[0]["type"] = $_POST["anony"];
            }
            
            // update database based on what user chose to post as
            query("UPDATE users SET type=? WHERE id=?", $rows3[0]["type"], $_SESSION["id"]);
        }
        // else if the submit button for choosing a theme is pushed
        elseif (isset($_POST["color"]))
        {
            // update database based on what user selected for theme
            query("UPDATE users SET theme=? WHERE id=?", $_POST["color"], $_SESSION["id"]);
        }
        
        // render
        render("setting_form.php", ["title" => "Setting", "rows3" => $rows3]);

        // redirect to same page
        redirect("/setting.php");
    }
    else
    {
        // render
        render("setting_form.php", ["title" => "Setting", "rows3" => $rows3]);
    }
    
?>
