<table>
    <thead>
        <tr>
            <th>Select theme</th>
            <th>Select either anonymous or your username for posting</th>
        </tr>
    </thead>
<tr><td>
<form action="/setting.php" method="post">
    <fieldset>
        <div class="form-group">
            <select name="color">
            <option value = "">List of themes</option>
            <option value = "#FFFFFF">White</option>
            <option value = "#000000">Black</option>
            <option value = "#FF6961">Red</option>
            <option value = "#FFB347">Orange</option>
            <option value = "#FDFD96">Yellow</option>
            <option value = "#77DD77">Green</option>
            <option value = "#AEC6CF">Blue</option>
            <option value = "#B39EB5">Purple</option>
            <option value = "#CB99C9">Violet</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Select!</button>
        </div>
    </fieldset>
</form>
</td>
<td>
<form action="/setting.php" method="post">
    <fieldset>
        <div class="form-group">
            <input type="radio" name="anony" value="Anon">Anon
            <br />
            <input type="radio" name="anony" value="<?php echo $rows3[0]['username'] ?>"><?php echo $rows3[0]['username'] ?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Select!</button>
        </div>
    </fieldset>
</form>
</td></tr>
</table>
<br />
<?php
        // print the current name of the theme selected and the name the user chose to post as
        if ($rows3[0]["theme"] == "#000000")
        {
            print("Current theme: Black\n");
        }
        elseif ($rows3[0]["theme"] == "#FF6961")
        {
            print("Current theme: Red\n");
        }
        elseif ($rows3[0]["theme"] == "#FFB347")
        {
            print("Current theme: Orange\n");
        }
        elseif ($rows3[0]["theme"] == "#FDFD96")
        {
            print("Current theme: Yellow\n");
        }
        elseif ($rows3[0]["theme"] == "#77DD77")
        {
            print("Current theme: Green\n");
        }
        elseif ($rows3[0]["theme"] == "#AEC6CF")
        {
            print("Current theme: Blue\n");
        }
        elseif ($rows3[0]["theme"] == "#B39EB5")
        {
            print("Current theme: Purple\n");
        }
        elseif ($rows3[0]["theme"] == "#CB99C9")
        {
            print("Current theme: Violet\n");
        }
        else
        {
            print("Current theme: White\n");
        }
        print("<br />\n");
        print("Posting as " . $rows3[0]["type"] . "\n");
        print("<br />\n");
        print("<br />\n");

?>
