<?php

    // configuration
    require("../includes/config.php");
    
    // if no parameter is given
    if (!isset($_REQUEST["p"]))
    {
        // redirect to index
        redirect("/");
    }

    // query database
    $rows = query("SELECT num, name, time, comment FROM comments WHERE topic=?", $_REQUEST["p"]);
    $rows2 = query("SELECT name, time, comment, num FROM topics WHERE num=?", $_REQUEST["p"]);
    $rows3 = query("SELECT theme, type, username FROM users WHERE id=?", $_SESSION["id"]);

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query database
        $rows2 = query("SELECT name, time, comment, num FROM topics WHERE num=?", $_REQUEST["p"]);

        // make sure the thread exists
        if ($rows2[0]["num"] >= $_POST["p"])
        {
            // insert comment into database
            query("INSERT INTO comments (name, comment, topic, id) VALUES(?, ?, ?, ?)", 
            $rows3[0]["type"], $_POST["comment"], $_POST["p"], $_SESSION["id"]);
        }
        
        // render
        render("thread_form.php", ["title" => $_POST["p"], "rows" => $rows, "rows2" => $rows2, "rows3" => $rows3]);
        
        // redirect to the same page
        redirect("/thread.php?p=" . $_POST["p"]);
    }
    else
    {
        // render
        render("thread_form.php", ["title" => $_REQUEST["p"], "rows" => $rows, "rows2" => $rows2, "rows3" => $rows3]);
    }
    
?>
