<?php
session_start();
$info = $_SESSION["USER"];
?>
<html>
<head>

</head>
<body>
    <h3>schoolInfo</h3>
    <p><b>Name: </b> <?=$info["schoolInfo"]["Name"]?></p>
    <p><b>Faculty: </b> <?=$info["schoolInfo"]["Faculty"]?></p>
    <p><b>Course: </b> <?=$info["schoolInfo"]["Course"]?></p>
    <p><a href="/lab4/script.php">Back</a></p>
</body>
</html>
