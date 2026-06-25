<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

unset($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Order Placed</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="text-center p-5">

<h1>🎉 Order Placed Successfully!</h1>

<p>Thank you <b><?php echo $name; ?></b></p>

<a href="index.php" class="btn btn-dark mt-3">Back to Home</a>

</body>
</html>