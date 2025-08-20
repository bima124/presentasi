<?php
require_once 'config.php';

// Hitung total users
$query_users = "SELECT COUNT(*) as total FROM users";
$result_users = mysqli_query($conn, $query_users);
$total_users = mysqli_fetch_assoc($result_users)['total'];

// Hitung total artikel
$query_artikel = "SELECT COUNT(*) as total FROM artikel";
$result_artikel = mysqli_query($conn, $query_artikel);
$total_artikel = mysqli_fetch_assoc($result_artikel)['total'];

// Hitung total review
$query_review = "SELECT COUNT(*) as total FROM review";
$result_review = mysqli_query($conn, $query_review);
$total_review = mysqli_fetch_assoc($result_review)['total'];

$title = "Dashboard Admin"; 
include 'components/header.php';
include 'components/sidebar.php';
?>

<!-- Main Content -->
<div class="flex-1 ml-64 p-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Dashboard Admin</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card Users -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-gray-600 text-lg mb-2">Total Users</h3>
            <p class="text-3xl font-bold text-gray-800"><?php echo $total_users; ?></p>
        </div>

        <!-- Card Articles -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-gray-600 text-lg mb-2">Total Artikel</h3>
            <p class="text-3xl font-bold text-gray-800"><?php echo $total_artikel; ?></p>
        </div>

        <!-- Card Reviews -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-gray-600 text-lg mb-2">Total Review</h3>
            <p class="text-3xl font-bold text-gray-800"><?php echo $total_review; ?></p>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>