<?php
require_once '../config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM users WHERE id_user = $id");
}

header('Location: ../users.php');
exit;