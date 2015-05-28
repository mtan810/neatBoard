<?php

    // configuration
    require("../includes/config.php");
    
    if (isset($_SESSION["id"]))
    {
        $rows3 = query("SELECT theme FROM users WHERE id=?", $_SESSION["id"]);
        
        render("about_form.php", ["title" => "About Us", "rows3" => $rows3]);
    }
    else
    {
        render("about_form.php", ["title" => "About Us"]);
    }
    
?>
