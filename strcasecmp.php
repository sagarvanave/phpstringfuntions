<!DOCTYPE html>
<html>
<body>
<?php
echo strcasecmp("Hello world!","HELLO WORLD!")."<br>"; // The two strings are equal
echo strcasecmp("Hello world!","HELLO")."<br>"; // String1 is greater than string2
echo strcasecmp("Hello world!","HELLO WORLD! HELLO!")."<br>"; // String1 is less than string2 
?>
<p>If this function returns 0, the two strings are equal.</p>
  
</body>
</html>