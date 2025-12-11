<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$course = $_POST["course"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Output</title>
</head>
<body>

<h2>Application Submitted Successfully</h2>

<p><b>Name:</b> <?php echo $name; ?></p>
<p><b>Email:</b> <?php echo $email; ?></p>
<p><b>Phone:</b> <?php echo $phone; ?></p>
<p><b>Course:</b> <?php echo $course; ?></p>

</body>
</html>
