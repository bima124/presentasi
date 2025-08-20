<?php
require_once '../config.php';

$id = $_GET['id'];
$review = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM review WHERE id_review = $id"));
$users = mysqli_query($conn, "SELECT id_user, nama FROM users");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_POST['id_user'];
    $rating = $_POST['rating'];
    $text_review = $_POST['text_review'];
    
    mysqli_query($conn, "UPDATE review SET 
                        id_user = '$id_user',
                        rating = '$rating',
                        text_review = '$text_review'
                        WHERE id_review = $id");
                        
    header('Location: ../review.php');
    exit;
}

$title = "Edit Review";
include '../components/header.php';
include '../components/sidebar.php';
?>

<div class="flex-1 ml-64 p-8">
    <h1 class="text-3xl font-semibold mb-6">Edit Review</h1>
    
    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST">
            <div class="mb-4">
                <label class="block mb-2">User</label>
                <select name="id_user" class="w-full border rounded px-3 py-2" required>
                    <?php while($user = mysqli_fetch_assoc($users)): ?>
                        <option value="<?= $user['id_user'] ?>" <?= $review['id_user'] == $user['id_user'] ? 'selected' : '' ?>>
                            <?= $user['nama'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">Rating</label>
                <select name="rating" class="w-full border rounded px-3 py-2" required>
                    <?php for($i = 1; $i <= 5; $i++): ?>
                        <option value="<?= $i ?>" <?= $review['rating'] == $i ? 'selected' : '' ?>><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2">text_review</label>
                <textarea name="text_review" class="w-full border rounded px-3 py-2" rows="3" required><?= $review['text_review'] ?></textarea>
            </div>
            
            <div class="flex gap-2">
                <a href="../review.php" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</div>

<?php include '../components/footer.php'; ?>