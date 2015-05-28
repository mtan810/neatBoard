<?php

    // configuration
    require("../includes/config.php");
    
    $rows3 = query("SELECT theme FROM users WHERE id=?", $_SESSION["id"]);
    
    render("index_form.php", ["title" => "Home", "rows3" => $rows3]);
    
?>
