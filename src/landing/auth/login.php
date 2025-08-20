<?php include '../layout/header.php' ?>

<?php include '../components/navbar.php' ?>

<!-- Side Bar kiri -->
<?php include '../components/sidebar.php' ?>
<br><br><br>
<div class="min-h-screen flex flex-col justify-center items-center px-4">
    <div class="bg-white rounded-xl shadow-lg px-8 sm:px-16 py-8 max-w-md w-full">
        <h2 class="text-3xl font-bold text-[#00a9ce] mb-8 text-center">Masuk</h2>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?= $_SESSION['error']; ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <?php
        if(isset($_GET['action']) && $_GET['action'] == 'register_success'): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                Registrasi berhasil! Silakan masuk.
            </div>
        <?php endif; ?>

        <?php
        if(isset($_GET['action']) && $_GET['action'] == 'login_gagal'): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                Email atau password salah!
            </div>
        <?php endif; ?>

        <form class="space-y-6" action="../../../src/admin/controller/auth_login.php" method="POST">
            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00a9ce] focus:border-transparent transition-colors" required>
            </div>
            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                <input type="password" name="password" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00a9ce] focus:border-transparent transition-colors" required>
            </div>
            <button type="submit" class="w-full bg-[#00a9ce] text-white py-3 px-4 rounded-lg hover:bg-[#007a9c] transition-colors font-medium text-sm">
                Masuk
            </button>
        </form>
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                Belum punya akun? <a href="register.php" class="text-[#00a9ce] hover:underline font-medium">Daftar di sini</a>
            </p>
        </div>
    </div>
</div>
<!-- <?php include '../components/footer.php' ?> -->

<?php include '../layout/end-header.php' ?>