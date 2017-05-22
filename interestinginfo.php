<?php
session_start();
$info = $_SESSION["USER"];
?>
<html>
<head>

</head>
<body>
<h3>interestingInfo</h3>
<p><b>interesting: </b> <?php foreach($info["interestingInfo"] as $val => $key ) print_r($key.' ')?></p>
<p><a href="/lab4/script.php">Back</a></p>
</body>
</html>
