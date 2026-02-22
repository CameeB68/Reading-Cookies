<!DOCTYPE html>
<html>
<head>
    <title>View Settings</title>
</head>
<body>

<h2>Your Saved Settings</h2>

<?php

if (isset($_COOKIE['font_size'])) {
    echo "Font Size: " . $_COOKIE['font_size'] . "<br>";
}

if (isset($_COOKIE['font_color'])) {
    echo "Font Color: " . $_COOKIE['font_color'] . "<br>";
}

if (isset($_COOKIE['background_color'])) {
    echo "Background Color: " . $_COOKIE['background_color'] . "<br>";
}

if (!isset($_COOKIE['font_size'])) {
    echo "No settings have been saved yet.";
}

?>

<br><br>
<a href="customize.php">Back to Customize</a>

</body>
</html>