<?php
require_once '../config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM review WHERE id_review = $id");
}

header('Location: ../review.php');
exit;