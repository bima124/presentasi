<?php include '../layout/header.php' ?>

<?php include '../components/navbar.php' ?>

<!-- Side Bar kiri -->
<?php include '../components/sidebar.php' ?>

<!-- Main Content Area -->
<div class="ml-[8em] p-6 pt-[15em]" id="mainContent">
    <!-- Articles Header -->
    <div class="bg-white rounded-lg shadow-md p-8 mb-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-[#00a9ce] mb-4">Pusat Artikel</h1>
            <p class="text-gray-600 text-lg">Temukan berbagai artikel dan informasi terkini seputar dunia logistik</p>
        </div>
    </div>

    <!-- Article Categories -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Konsep Articles -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="bg-gradient-to-br from-[#00a9ce] to-[#007a9c] p-6">
                <div class="text-white text-center">
                    <div class="text-4xl mb-3">💡</div>
                    <h2 class="text-2xl font-bold">Konsep</h2>
                    <p class="text-sm opacity-90 mt-2">Konsep dasar dan teori logistik modern</p>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-3">
                    <div class="border-l-4 border-[#00a9ce] pl-3">
                        <h3 class="font-semibold text-gray-800">Supply Chain Management</h3>
                        <p class="text-sm text-gray-600">Strategi pengelolaan rantai pasok yang efektif</p>
                    </div>
                    <div class="border-l-4 border-[#00a9ce] pl-3">
                        <h3 class="font-semibold text-gray-800">Warehouse Optimization</h3>
                        <p class="text-sm text-gray-600">Optimasi gudang untuk efisiensi maksimal</p>
                    </div>
                    <div class="border-l-4 border-[#00a9ce] pl-3">
                        <h3 class="font-semibold text-gray-800">Green Logistics</h3>
                        <p class="text-sm text-gray-600">Konsep logistik ramah lingkungan</p>
                    </div>
                </div>
                <button onclick="loadArticleCategory('konsep')" class="w-full mt-6 bg-[#00a9ce] hover:bg-[#007a9c] text-white py-2 px-4 rounded-md transition-colors">
                    Baca Artikel Konsep
                </button>
            </div>
        </div>

        <!-- Teknologi Articles -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="bg-gradient-to-br from-blue-500 to-blue-700 p-6">
                <div class="text-white text-center">
                    <div class="text-4xl mb-3">🔧</div>
                    <h2 class="text-2xl font-bold">Teknologi</h2>
                    <p class="text-sm opacity-90 mt-2">Inovasi teknologi dalam industri logistik</p>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-3">
                    <div class="border-l-4 border-blue-500 pl-3">
                        <h3 class="font-semibold text-gray-800">IoT dalam Logistik</h3>
                        <p class="text-sm text-gray-600">Internet of Things untuk monitoring real-time</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-3">
                        <h3 class="font-semibold text-gray-800">AI & Machine Learning</h3>
                        <p class="text-sm text-gray-600">Kecerdasan buatan untuk prediksi demand</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-3">
                        <h3 class="font-semibold text-gray-800">Blockchain Logistics</h3>
                        <p class="text-sm text-gray-600">Teknologi blockchain untuk transparansi</p>
                    </div>
                </div>
                <button onclick="loadArticleCategory('teknologi')" class="w-full mt-6 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition-colors">
                    Baca Artikel Teknologi
                </button>
            </div>
        </div>

        <!-- Informasi Articles -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="bg-gradient-to-br from-green-500 to-green-700 p-6">
                <div class="text-white text-center">
                    <div class="text-4xl mb-3">📰</div>
                    <h2 class="text-2xl font-bold">Informasi</h2>
                    <p class="text-sm opacity-90 mt-2">Berita dan update terkini industri logistik</p>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-3">
                    <div class="border-l-4 border-green-500 pl-3">
                        <h3 class="font-semibold text-gray-800">Regulasi Terbaru</h3>
                        <p class="text-sm text-gray-600">Update regulasi pemerintah terkait logistik</p>
                    </div>
                    <div class="border-l-4 border-green-500 pl-3">
                        <h3 class="font-semibold text-gray-800">Market Insights</h3>
                        <p class="text-sm text-gray-600">Analisis pasar dan trend industri</p>
                    </div>
                    <div class="border-l-4 border-green-500 pl-3">
                        <h3 class="font-semibold text-gray-800">Company News</h3>
                        <p class="text-sm text-gray-600">Berita terbaru dari Swift Logistik</p>
                    </div>
                </div>
                <button onclick="loadArticleCategory('informasi')" class="w-full mt-6 bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded-md transition-colors">
                    Baca Artikel Informasi
                </button>
            </div>
        </div>
    </div>

    <!-- Featured Articles Section -->
    <div class="bg-white rounded-lg shadow-md p-8 mt-8">
        <h2 class="text-3xl font-bold text-[#00a9ce] mb-6 text-center">Artikel Pilihan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="border border-gray-200 rounded-lg p-6 hover:border-[#00a9ce] hover:shadow-md transition-all duration-300">
                <div class="flex items-start">
                    <div class="text-3xl mr-4">📊</div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2">Optimasi Rute Pengiriman dengan AI</h3>
                        <p class="text-sm text-gray-600 mb-3">Bagaimana kecerdasan buatan dapat membantu mengoptimalkan rute pengiriman untuk efisiensi maksimal dan penghematan biaya operasional.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <span>📅 15 Januari 2024</span>
                            <span class="mx-2">•</span>
                            <span>👤 Tim Editorial</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-6 hover:border-[#00a9ce] hover:shadow-md transition-all duration-300">
                <div class="flex items-start">
                    <div class="text-3xl mr-4">🌱</div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2">Tren Logistik Berkelanjutan 2024</h3>
                        <p class="text-sm text-gray-600 mb-3">Eksplorasi tren terbaru dalam logistik hijau dan bagaimana perusahaan dapat mengadopsi praktik yang lebih ramah lingkungan.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <span>📅 10 Januari 2024</span>
                            <span class="mx-2">•</span>
                            <span>👤 Tim Research</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function loadArticleCategory(category) {
        window.location.href = `articles/${category}.php`;
    }
</script>

<?php include '../layout/end-header.php' ?>