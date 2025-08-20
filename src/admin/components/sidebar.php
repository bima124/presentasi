<div class="w-64 h-screen bg-white shadow-lg fixed">
    <div class="p-5">
        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Panel Admin</h2>
        <nav>
            <ul>
                <li class="mb-3">
                    <a href="<?= $baseUrl ?>index.php" class="block p-3 text-gray-700 hover:bg-gray-100 rounded-lg">Dashboard</a>
                </li>
                <li class="mb-3">
                    <a href="<?= $baseUrl ?>users.php" class="block p-3 text-gray-700 hover:bg-gray-100 rounded-lg">Users</a>
                </li>
                <li class="mb-3">
                    <a href="<?= $baseUrl ?>artikel.php" class="block p-3 text-gray-700 hover:bg-gray-100 rounded-lg">Artikel</a>
                </li>
                <li class="mb-3">
                    <a href="<?= $baseUrl ?>review.php" class="block p-3 text-gray-700 hover:bg-gray-100 rounded-lg">Review</a>
                </li>
                <li>
                    <a href="<?= $baseUrl ?>controller/auth_logout.php" class="block p-3 text-gray-700 hover:bg-gray-100 rounded-lg">Keluar</a>
                </li>
            </ul>
        </nav>
    </div>
</div>