<?php
require_once 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    
    // Handle file upload
    $foto = '';
    if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $foto = time() . '_' . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/' . $foto);
    }
    
    $query = "INSERT INTO artikel (judul, deskripsi, foto, created_at) 
              VALUES ('$judul', '$deskripsi', '$foto', NOW())";
    mysqli_query($conn, $query);
    
    header('Location: artikel.php');
    exit;
}

$title = "Tambah Artikel";
include 'components/header.php';
include 'components/sidebar.php';
?>

<div class="flex-1 ml-64 p-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Tambah Artikel</h1>
    
    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Judul</label>
                <input type="text" name="judul" class="w-full border rounded px-3 py-2" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border rounded px-3 py-2" rows="5" required></textarea>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Foto</label>
                <input type="file" name="foto" accept="image/*">
            </div>
            
            <div class="flex justify-end">
                <a href="artikel.php" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 mr-2">Batal</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php include 'components/footer.php'; ?>