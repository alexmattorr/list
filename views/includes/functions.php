<?php 

    $connection = mysqli_connect('localhost', 'root', 'root', 'class');
    if (!$connection) {
        die("Database connection failed: " . mysql_error());
    }


if (isset($_POST['task'])) {

	session_start();
	ob_start();

    $user_id             = $_SESSION['user_id'];
    $name        = htmlentities($_POST['name']);
    
    $stmt = $connection->prepare("INSERT INTO items (user_id, name) VALUES (?, ?)");
    $stmt->bind_param('is', $user_id, $name);
    $stmt->execute();

    echo $name;
}


?>