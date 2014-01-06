<?php
$message = "No string entered";
 
if (!empty($_POST['string'])) {
   $message = "String converted: " . strtoupper($_POST['string']);
}
 
?>
<!DOCTYPE html>
<html>
<head>
   <title>To Upper!</title>
</head>
<body>
 
   <h1>To Upper!</h1>
 
   <p><?php echo $message; ?></p>
 
   <p><a href="toupper.html">Back to form</a>.</p>
 
</body>
</html>