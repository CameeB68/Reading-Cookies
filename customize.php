<?php
// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Set cookies (expire in 1 hour)
    setcookie('font_size', $_POST['font_size'], time() + 3600);
    setcookie('font_color', $_POST['font_color'], time() + 3600);
    setcookie('background_color', $_POST['background_color'], time() + 3600);

    echo "<h2>Your settings have been saved!</h2>";
    echo "<a href='view_settings.php'>View Your Settings</a>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customize Your Settings</title>
</head>
<body>
<h2>Customize Your Settings</h2>

<form method="post" action="customize.php">

Font Size:
<select name="font_size">
    <option value="Small">Small</option>
    <option value="Medium">Medium</option>
    <option value="Large">Large</option>
</select>
<br><br>

Font Color:
<select name="font_color">
    <option value="Black">Black</option>
    <option value="Blue">Blue</option>
    <option value="Red">Red</option>
</select>
<br><br>

Background Color:
<select name="background_color">
    <option value="White">White</option>
    <option value="Gray">Gray</option>
    <option value="Yellow">Yellow</option>
</select>
<br><br>

<input type="submit" value="Save Settings">

</form>

</body>
</html>