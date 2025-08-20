<?php
require_once '../config.php';

$id = $_GET['id'];
$artikel = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel = $id"));

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    
    $foto = $artikel['foto'];
    if($_FILES['foto']['name']) {
        // Hapus foto lama
        if($foto) unlink('../uploads/' . $foto);
        
        // Upload foto baru
        $foto = time() . '_' . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], '../uploads/' . $foto);
    }
    
    mysqli_query($conn, "UPDATE artikel SET 
                        kategori = '$kategori',
                        judul = '$judul',
                        deskripsi = '$deskripsi',
                        foto = '$foto'
                        WHERE id_artikel = $id");
                        
    header('Location: ../artikel.php');
    exit;
}

$title = "Edit Artikel";
include '../components/header.php';
include '../components/sidebar.php';
?>

<div class="flex-1 ml-64 p-8">
    <h1 class="text-3xl font-semibold mb-6">Edit Artikel</h1>
    
    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block mb-2">Kategori</label>
                <select name="kategori" class="w-full border rounded px-3 py-2" required>
                    <option value="">Pilih Kategori</option>
                    <option value="konsep" <?= $artikel['kategori'] == 'konsep' ? 'selected' : '' ?>>Konsep</option>
                    <option value="teknologi" <?= $artikel['kategori'] == 'teknologi' ? 'selected' : '' ?>>Teknologi</option>
                    <option value="informasi" <?= $artikel['kategori'] == 'informasi' ? 'selected' : '' ?>>Informasi</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Judul</label>
                <input type="text" name="judul" value="<?= $artikel['judul'] ?>" class="w-full border rounded px-3 py-2" required>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border rounded px-3 py-2" rows="5" required><?= $artikel['deskripsi'] ?></textarea>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Foto</label>
                <?php if($artikel['foto']): ?>
                    <img src="../uploads/<?= $artikel['foto'] ?>" width="200" class="mb-2">
                <?php endif; ?>
                <input type="file" name="foto">
            </div>
            
            <div class="flex gap-2">
                <a href="../artikel.php" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</div>

<?php include '../components/footer.php'; ?>