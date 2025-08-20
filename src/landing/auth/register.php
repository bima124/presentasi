<?php include '../layout/header.php' ?>

<?php include '../components/navbar.php' ?>

<!-- Side Bar kiri -->
<?php include '../components/sidebar.php' ?>
<br><br>
<div class="ml-[8em] min-h-screen flex justify-center items-center pt-[8em]">
    <div class="bg-white rounded-lg shadow-md px-24 py-12 max-w-md mx-auto">
        <h2 class="text-3xl font-bold text-[#00a9ce] mb-6 text-center">Daftar</h2>

        <?php if(isset($_SESSION['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?= $_SESSION['error']; ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <form class="space-y-4" action="../../../src/admin/controller/auth_register.php" method="POST">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                <input type="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Kata Sandi</label>
                <input type="password" name="confirm_password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]" required>
            </div>
            <button type="submit" class="w-full bg-[#00a9ce] text-white py-2 px-4 rounded-md hover:bg-[#007a9c] transition-colors">
                Daftar
            </button>
        </form>
        <div class="text-center mt-6">
            <p class="text-sm text-gray-600">
                Sudah punya akun?
                <a href="login.php" class="text-[#00a9ce] hover:text-[#007a9c] font-medium">Masuk di sini</a>
            </p>
        </div>
    </div>
</div>

<?php include '../layout/end-header.php' ?>

<script>
document.querySelector('form').addEventListener('submit', function(e) {
    const password = document.querySelector('input[name="password"]').value;
    const confirm = document.querySelector('input[name="confirm_password"]').value;
    
    if(password !== confirm) {
        e.preventDefault();
        alert('Kata sandi tidak cocok!');
    }
});
</script>