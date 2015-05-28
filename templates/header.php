<!DOCTYPE html>

<html lang="en">

    <head>

    <meta charset="utf-8"/>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>neatBoard v1.0: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>neatBoard v1.0</title>
        <?php endif ?>

        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>
    
    <?php if (isset($rows3)): ?>
    <body style="background-color:<?php echo htmlspecialchars($rows3[0]['theme']) . ';' ?>">
    <?php else: ?>
    <body>
    <?php endif ?>

        <div class="container">
        
            <div id="setting">
                <a href="setting.php">Account</a>
            </div>

            <div id="logout">
                <a href="logout.php">Log Out</a>
            </div>

            <div id="top">
                <a href="index.php">neatBoard</a>
            </div>
            
            <div id="middletop">
                <ul class="nav nav-pills">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>

            <div id="middle">
                <ul class="nav nav-pills">
                    <li><a href="forum.php?t=anime">Anime</a></li>
                    <li><a href="forum.php?t=manga">Manga</a></li>
                    <li><a href="forum.php?t=movie">Film</a></li>
                    <li><a href="forum.php?t=book">Literature</a></li>
                    <li><a href="forum.php?t=tv">TV</a></li>
                    <li><a href="forum.php?t=music">Music</a></li>
                    <li><a href="forum.php?t=game">Games</a></li>
                    <li><a href="forum.php?t=sports">Sports</a></li>
                    <li><a href="forum.php?t=news">News</a></li>
                    <li><a href="forum.php?t=tech">Tech</a></li>
                    <li><a href="forum.php?t=prog">Programming</a></li>
                    <li><a href="forum.php?t=random">Miscellaneous</a></li>
                </ul>
                
            <br />
                
