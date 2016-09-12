Returns the translation table used by htmlspecialchars() and htmlentities()<br><br><br>

<!DOCTYPE html>
<html>
<body>

<?php
print_r (get_html_translation_table()); // HTML_SPECIALCHARS is default.
?>

</body>
</html>