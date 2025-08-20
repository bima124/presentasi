<?php
// Function to get base URL
function getBaseUrl() {
    $currentPath = $_SERVER['PHP_SELF'];
    $basePath = '';
    
    if (strpos($currentPath, '/articles/') !== false) {
        $basePath = '../../landing/';
    } elseif (strpos($currentPath, '/auth/') !== false) {
        $basePath = '../../landing/';
    } elseif (strpos($currentPath, '/components/') !== false || strpos($currentPath, '/layout/') !== false) {
        $basePath = '../';
    } else {
        $basePath = '';
    }
    
    return $basePath;
}

$baseUrl = getBaseUrl();
?>

<nav class="font-bold text-[30px] w-full h-[5em] flex shadow-lg fixed top-0 left-0 z-50">
    <a href="<?= $baseUrl ?>home.php" class="h-full w-[8em] bg-gradient-to-br from-[#00a9ce] to-[#007a9c] flex items-center justify-center relative overflow-hidden hover:opacity-90 transition-opacity">
        <div class="absolute inset-0 bg-white opacity-10 transform -skew-y-12"></div>
        <div class="absolute top-2 right-2 w-4 h-4 bg-white opacity-20 rounded-full"></div>
        <div class="absolute bottom-3 left-3 w-2 h-2 bg-white opacity-30 rounded-full"></div>
        <div class="text-center text-white z-10 flex flex-col items-center">
            <div class="text-[22px] font-extrabold tracking-tight leading-none">Swift</div>
            <div class="text-[12px] font-light tracking-widest -mt-1">LOGISTIK</div>
            <div class="w-8 h-0.5 bg-white mt-1 opacity-80"></div>
        </div>
    </a>
    <div class="h-full w-full bg-white flex flex-col border-l-2 border-[#00a9ce]">
        <div class="bg-gradient-to-r from-[#00a9ce] to-[#00bdd6] h-[3em] flex items-center">
            <h1 class="text-center text-white w-full text-[18px] tracking-wide">Solusi Pengiriman & Logistik Terpercaya</h1>
        </div>
        <div class="h-[2em] flex items-center bg-gradient-to-r from-white to-gray-50">
            <div class="text-center text-[#00a9ce] w-full text-[14px] flex justify-center items-center space-x-2">
                <a href="<?= $baseUrl ?>home.php" class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 px-2 py-1 rounded-md hover:bg-blue-50">Beranda</a>
                <span class="text-gray-300 font-light">•</span>
                <a href="<?= $baseUrl ?>home.php#about" class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 px-2 py-1 rounded-md hover:bg-blue-50">Tentang</a>
                <span class="text-gray-300 font-light">•</span>
                <a href="<?= $baseUrl ?>home.php#services" class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 px-2 py-1 rounded-md hover:bg-blue-50">Layanan</a>
                <span class="text-gray-300 font-light">•</span>
                <a href="<?= $baseUrl ?>home.php#visi-misi" class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 px-2 py-1 rounded-md hover:bg-blue-50">Visi Misi</a>
                <span class="text-gray-300 font-light">•</span>
                <a href="<?= $baseUrl ?>contact.php" class="hover:text-[#007a9c] hover:scale-105 transition-all duration-300 px-2 py-1 rounded-md hover:bg-blue-50">Kontak</a>
            </div>
        </div>
    </div>
</nav>