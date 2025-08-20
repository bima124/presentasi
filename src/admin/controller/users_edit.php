<?php
require_once '../config.php';

$id = $_GET['id'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id_user = $id"));

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    
    $password_query = "";
    if(!empty($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $password_query = ", password = '$password'";
    }
    
    mysqli_query($conn, "UPDATE users SET 
                        nama = '$nama',
                        email = '$email',
                        role = '$role'
                        $password_query
                        WHERE id_user = $id");
                        
    header('Location: ../users.php');
    exit;
}

$title = "Edit User";
include '../components/header.php';
include '../components/sidebar.php';
?>

<div class="flex-1 ml-64 p-8">
    <h1 class="text-3xl font-semibold mb-6">Edit User</h1>
    
    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST">
            <div class="mb-4">
                <label class="block mb-2">Nama</label>
                <input type="text" name="nama" value="<?= $user['nama'] ?>" class="w-full border rounded px-3 py-2" required>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Email</label>
                <input type="email" name="email" value="<?= $user['email'] ?>" class="w-full border rounded px-3 py-2" required>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Password (kosongkan jika tidak ingin mengubah)</label>
                <input type="password" name="password" class="w-full border rounded px-3 py-2">
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Role</label>
                <select name="role" class="w-full border rounded px-3 py-2" required>
                    <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="user" <?= $user['role'] == 'user' ? 'selected' : '' ?>>User</option>
                </select>
            </div>
            
            <div class="flex gap-2">
                <a href="../users.php" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</div>

<?php include '../components/footer.php'; ?>