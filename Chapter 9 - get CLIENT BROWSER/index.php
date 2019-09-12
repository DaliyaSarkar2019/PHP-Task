<!DOCTYPE html>
<html>
<body>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();
print_r($browser);
?>

</body>
</html>