<?php
require_once '../config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $artikel = mysqli_fetch_assoc(mysqli_query($conn, "SELECT foto FROM artikel WHERE id_artikel = $id"));
    
    // Hapus foto jika ada
    if($artikel['foto'] && file_exists('../uploads/' . $artikel['foto'])) {
        unlink('../uploads/' . $artikel['foto']);
    }
    
    mysqli_query($conn, "DELETE FROM artikel WHERE id_artikel = $id");
}

header('Location: ../artikel.php');
exit;