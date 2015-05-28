<?php

    // configuration
    require("../includes/config.php");
    
    if (isset($_SESSION["id"]))
    {
        $rows3 = query("SELECT theme FROM users WHERE id=?", $_SESSION["id"]);
        
        render("contact_form.php", ["title" => "Contact Us", "rows3" => $rows3]);
    }
    else
    {
        render("contact_form.php", ["title" => "Contact Us"]);
    }
    
?>
