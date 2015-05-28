<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check password
        if (empty($_POST["password"]))
        {
            apologize("You must provide a password.");
        }
        // check confirmation
        else if (empty($_POST["confirmation"]))
        {
            apologize("You must provide a confirmation.");
        }
        // check if password and confirmation are the same
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Passwords do not match!");
        }
        // check username
        if (empty($_POST["username"]))
        {
            apologize("You must provide a username.");
        }
        
        // insert a new user into the database
        $result = query("INSERT INTO users (username, hash, theme, type) VALUES(?, ?, ?, ?)", $_POST["username"], crypt($_POST["password"]), '#FFFFFF', 'Anon');

        // check if username already exists
        if ($result === false)
        {
            apologize("Username already exists.");
        }
        
        // find out their id
        $rows = query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        
        // store their id in session
        $_SESSION["id"] = $id;
        
        // redirect to index.php
        redirect("/");
        
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
