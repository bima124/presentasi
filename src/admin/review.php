<?php
require_once 'config.php';

// Jika ingin menghapus
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM review WHERE id_review = $id");
    header('Location: review.php');
}

// Fetching semua review dan nama artikel terkait
$query = "SELECT r.*, u.nama 
          FROM review r 
          JOIN users u ON r.id_user = u.id_user 
          ORDER BY r.created_at DESC";
$result = mysqli_query($conn, $query);

$title = "Kelola Review"; 
include 'components/header.php';
include 'components/sidebar.php';
?>

<!-- Main Content -->
<div class="flex-1 ml-64 p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold">Kelola Review</h1>
        <a href="controller/review_add.php" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Review</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-left py-2">User</th>
                    <th class="text-left py-2">Review</th>
                    <th class="text-left py-2">Rating</th>
                    <th class="text-left py-2 w-32">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr class="border-t">
                    <td class="py-3"><?= $row['nama'] ?></td>
                    <td class="py-3"><?= substr($row['text_review'], 0, 100) ?>...</td>
                    <td class="py-3"><?= $row['rating'] ?>/5</td>
                    <td class="py-3">
                        <div class="flex space-x-4">
                            <a href="controller/review_edit.php?id=<?= $row['id_review'] ?>" 
                               class="text-blue-500 hover:text-blue-600">
                                Edit
                            </a>
                            <a href="controller/review_delete.php?id=<?= $row['id_review'] ?>" 
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