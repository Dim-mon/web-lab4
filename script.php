<?php
    if(isset($_POST["schoolInfo"])) {
        session_start();
        $_SESSION["USER"] = $_POST;
    }
?>

<html>
<head>

</head>
<body>
<a href="peopleinfo.php">People info</a>
<a href="schoolinfo.php">School info</a>
<a href="interestinginfo.php">Interesting info</a>
<p><a href="/lab4/">Back</a></p>
</body>
</html>
