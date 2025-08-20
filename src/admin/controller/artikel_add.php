<?php
require_once '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    
    $foto = '';
    if($_FILES['foto']['name']) {
        $foto = time() . '_' . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], '../uploads/' . $foto);
    }
    
    mysqli_query($conn, "INSERT INTO artikel (kategori, judul, deskripsi, foto, created_at) 
                        VALUES ('$kategori', '$judul', '$deskripsi', '$foto', NOW())");
                        
    header('Location: ../artikel.php');
    exit;
}

$title = "Tambah Artikel";
include '../components/header.php';
include '../components/sidebar.php';
?>

<div class="flex-1 ml-64 p-8">
    <h1 class="text-3xl font-semibold mb-6">Tambah Artikel</h1>
    
    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block mb-2">Kategori</label>
                <select name="kategori" class="w-full border rounded px-3 py-2" required>
                    <option value="">Pilih Kategori</option>
                    <option value="konsep">Konsep</option>
                    <option value="teknologi">Teknologi</option>
                    <option value="informasi">Informasi</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Judul</label>
                <input type="text" name="judul" class="w-full border rounded px-3 py-2" required>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border rounded px-3 py-2" rows="5" required></textarea>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Foto</label>
                <input type="file" name="foto">
            </div>
            
            <div class="flex gap-2">
                <a href="../artikel.php" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php include '../components/footer.php'; ?>