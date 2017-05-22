<?php
    session_start();
    $info = $_SESSION["USER"];
    ?>
<html>
    <head>

    </head>
    <body>
        <h3>contactInfo</h3>
        <p><b>LastName: </b> <?=$info["contactInfo"]["LastName"]?></p>
        <p><b>FirstName: </b> <?=$info["contactInfo"]["FirstName"]?></p>
        <p><b>Phone: </b> <?=$info["contactInfo"]["Phone"]?></p>
        <p><b>LastName: </b> <?=$info["contactInfo"]["Email"]?></p>
        <p><a href="/lab4/script.php">Back</a></p>
    </body>
</html>
