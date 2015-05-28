<?php

    // configuration
    require("../includes/config.php");
    
    // if no parameter is given
    if (!isset($_REQUEST["t"]))
    {
        // redirect to index
        redirect("/");
    }
    
    // query database
    $rows = query("SELECT num, name, time, comment FROM topics WHERE type=?", $_REQUEST["t"]);
    $rows3 = query("SELECT theme, type, username FROM users WHERE id=?", $_SESSION["id"]);
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // cut any leading and trailing white spaces
        $cm = trim($_POST["comment"]);
        
        // if the user entered nothing or white spaces only
        if ($cm == "")
        {
            // inform the user to enter something
            apologize("You need to enter a topic!");
        }
        else
        {
            // make sure that the user is posting only in the given subject
            if ($_POST["t"] == "anime" || $_POST["t"] == "manga" || $_POST["t"] == "movie" || $_POST["t"] == "book" ||
                $_POST["t"] == "tv" || $_POST["t"] == "music" || $_POST["t"] == "game" || $_POST["t"] == "sports" ||
                $_POST["t"] == "news" || $_POST["t"] == "tech" || $_POST["t"] == "prog" || $_POST["t"] == "random")
            {
                // insert topic into database
                query("INSERT INTO topics (name, comment, type, id) VALUES(?, ?, ?, ?)", 
                    $rows3[0]["type"], $_POST["comment"], $_POST["t"], $_SESSION["id"]);
            }
        }
        
        // render
        render("forum_form.php", ["title" => $_POST["t"], "rows" => $rows, "rows3" => $rows3]);
        
        // redirect to the same page
        redirect("/forum.php?t=" . $_POST["t"]);
    }
    else
    {
        // render
        render("forum_form.php", ["title" => $_REQUEST["t"], "rows" => $rows, "rows3" => $rows3]);
    }
    
?>
