<?php
require_once 'config.php';

$query = "SELECT * FROM users ORDER BY id_user DESC";
$result = mysqli_query($conn, $query);

$title = "Kelola Users"; 
include 'components/header.php';
include 'components/sidebar.php';
?>

<!-- Main Content -->
<div class="flex-1 ml-64 p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold">Kelola Users</h1>
        <a href="controller/users_add.php" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah User</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-left py-2">Nama</th>
                    <th class="text-left py-2">Email</th>
                    <th class="text-left py-2">Role</th>
                    <th class="text-left py-2 w-32">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr class="border-t">
                    <td class="py-3"><?= $row['nama'] ?></td>
                    <td class="py-3"><?= $row['email'] ?></td>
                    <td class="py-3"><?= $row['role'] ?></td>
                    <td class="py-3">
                        <div class="flex space-x-4">
                            <a href="controller/users_delete.php?id=<?= $row['id_user'] ?>" 
                               class="text-red-500 hover:text-red-600"
                               onclick="return confirm('Yakin hapus?')">
                                Hapus
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'components/footer.php'; ?>