<div id="anchorbot">
    <a href="#bottom">Go to bottom of page</a>
</div>
<br />

<?php

        // print the topic and set it as first comment in thread
        foreach ($rows2 as $row)
        {
            print("<div id='p" . $_REQUEST["p"] . "' class='txbox'>\n");
            print("<span class='name'> {$row["name"]} </span>\n");
            print("<span class='time'> {$row["time"]} </span>\n");
            print("<span class='num'> t#{$_REQUEST["p"]} </span>\n");
            print("<br /><br />\n");
            print("<span class='cm'>{$row["comment"]}</span>\n");
            print("<br />\n");
            print("</div>\n");
            print("<br />\n");
        }

        // print comments
        foreach ($rows as $row)
        {
            print("<div id='p" . $row["num"] . "' class='txbox'>\n");
            print("<span class='name'> {$row["name"]} </span>\n");
            print("<span class='time'> {$row["time"]} </span>\n");
            print("<span class='num'> #{$row["num"]} </span>\n");
            print("<br /><br />\n");
            print("<span class='cm'>" . nl2br(htmlspecialchars($row["comment"])) . "</span>\n");
            print("<br />\n");
            print("</div>\n");
        }
        
?>
<br />

<div id="anchortop">
    <a href="#top">Go to top of page</a>
</div>
<br />

<form action="thread.php" method="post">
    <fieldset>
        <div class="form-group">
            <textarea class="form-control" name="comment" placeholder="Comment" maxlength="500" rows="4"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Post!</button>
        </div>
        <div class="form-group">
            <input type="hidden" name="p" value="<?php echo(htmlspecialchars($_REQUEST['p'])); ?>" />
        </div>
    </fieldset>
</form>
