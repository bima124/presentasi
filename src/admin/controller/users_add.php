<?php
require_once '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    
    mysqli_query($conn, "INSERT INTO users (nama, email, password, role ) 
                        VALUES ('$nama', '$email', '$password', '$role')"); 
    header('Location: ../users.php');
    exit;
}

$title = "Tambah User";
include '../components/header.php';
include '../components/sidebar.php';
?>

<div class="flex-1 ml-64 p-8">
    <h1 class="text-3xl font-semibold mb-6">Tambah User</h1>
    
    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST">
            <div class="mb-4">
                <label class="block mb-2">Nama</label>
                <input type="text" name="nama" class="w-full border rounded px-3 py-2" required>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Email</label>
                <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Password</label>
                <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Role</label>
                <select name="role" class="w-full border rounded px-3 py-2" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            
            <div class="flex gap-2">
                <a href="../users.php" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php include '../components/footer.php'; ?>