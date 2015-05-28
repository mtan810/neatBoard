<form action="forum.php" method="post">
    <fieldset>
        <div class="form-group">
            <textarea class="form-control" name="comment" placeholder="Enter your topic here!" maxlength="500" rows="4"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Create Topic!</button>
        </div>
        <div class="form-group">
            <input type="hidden" name="t" value="<?php echo(htmlspecialchars($_REQUEST['t'])); ?>" />
        </div>
    </fieldset>
</form>

<div id="anchorbot">
    <a href="#bottom">Go to bottom of page</a>
</div>
<br />

<table>
    <thead>
        <tr>
            <th class="thtopic">Topic</th>
            <th class="thname">Posted by</th>
        </tr>
    </thead>
<?php

    // reverse the rows so the latest topic is printed first
    $reverserows = array_reverse($rows);
    
    // print topics
    foreach ($reverserows as $row)
    {
        print("<tr>\n");
        print("<td class='tdtopic'><a href='thread.php?p=" . $row["num"] . "'>" . $row["comment"] . "</a></td>\n");
        print("<td class='tdname'>" . $row["name"] . "<br />" . $row["time"] . "</td>\n");
        print("</tr>\n");
    }
        
?>
</table>
<br />

<div id="anchortop">
    <a href="#top">Go to top of page</a>
</div>
