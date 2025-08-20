<!-- Side Bar kiri -->
<nav class="flex fixed left-0 top-[10em] z-40">
    <!-- Sidebar Content -->
    <div id="sidebar" class="bg-gradient-to-b from-gray-100 to-gray-300 h-[calc(90vh-5em)] w-[4em] transition-all duration-300 shadow-lg overflow-hidden hover:w-[13.9em] group">
        <div class="p-3 h-full flex flex-col">
            <!-- Main Navigation -->
            <ul class="space-y-3 mt-4 flex-1">
                <!-- Artikel Section -->
                <li class="text-gray-700">
                    <div class="flex items-center hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="toggleSubmenu('articles')">
                        <span class="text-lg min-w-[1.5em]">📄</span>
                        <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Artikel</span>
                        <span class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-xs" id="articles-arrow">▶</span>
                    </div>
                    <ul id="articles-menu" class="ml-6 mt-2 space-y-1 opacity-0 group-hover:opacity-100 transition-all duration-300 max-h-0 overflow-hidden">
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadArticleCategory('konsep')">
                            <span class="mr-2 text-[10px]">•</span>Konsep
                        </li>
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadArticleCategory('teknologi')">
                            <span class="mr-2 text-[10px]">•</span>Teknologi
                        </li>
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadArticleCategory('informasi')">
                            <span class="mr-2 text-[10px]">•</span>Informasi
                        </li>
                        <li class="flex items-center text-xs text-gray-600 hover:text-gray-800 cursor-pointer py-1 pl-2 hover:bg-gray-400 hover:bg-opacity-20 rounded transition-all duration-200" onclick="loadAllArticles()">
                            <span class="mr-2 text-[10px]">•</span>Semua Artikel
                        </li>
                    </ul>
                </li>

                <!-- Event Gallery -->
                <li class="flex items-center text-gray-700 hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadEventGallery()">
                    <span class="text-lg min-w-[1.5em]">🎉</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Event Gallery</span>
                </li>

                <!-- Foto Klien -->
                <li class="flex items-center text-gray-700 hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadPhotoGallery()">
                    <span class="text-lg min-w-[1.5em]">📸</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Foto Klien</span>
                </li>

                <!-- Contact -->
                <li class="flex items-center text-gray-700 hover:bg-gray-400 hover:bg-opacity-30 rounded-lg p-2 cursor-pointer transition-all duration-300" onclick="loadContactPage()">
                    <span class="text-lg min-w-[1.5em]">📞</span>
                    <span class="ml-3 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm font-medium">Kontak</span>
                </li>
            </ul>

            <!-- Authentication Section at Bottom -->
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-4">
                <div class="border-t border-gray-400 border-opacity-50 pt-4 space-y-2">
                    <a href="../auth/login.php" class="block w-full bg-[#00a9ce] text-white text-sm py-2 px-3 rounded-md hover:bg-opacity-80 transition-all duration-300 font-medium text-center">
                        Masuk
                    </a>
                    <a href="../auth/register.php" class="block w-full bg-white text-gray-700 text-sm py-2 px-3 rounded-md hover:bg-gray-50 transition-all duration-300 font-medium border border-gray-300 text-center">
                        Daftar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Toggle Button -->
    <div class="h-[calc(90vh-5em)] w-[3em] flex items-start justify-center pt-4">
        <button onclick="toggleSidebar()" class="bg-gray-500 hover:bg-gray-600 text-white p-2 rounded-md shadow-lg transition-all duration-300 hover:scale-105">
            <span id="toggleIcon">→</span>
        </button>
    </div>
</nav>

<script>
    let sidebarExpanded = false;

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const toggleIcon = document.getElementById('toggleIcon');

        if (!sidebarExpanded) {
            sidebar.classList.remove('hover:w-[13.9em]');
            sidebar.classList.add('w-[13.9em]', '!opacity-100');
            sidebar.classList.remove('group');

            // Force show all text
            const hiddenElements = sidebar.querySelectorAll('.opacity-0');
            hiddenElements.forEach(el => {
                el.classList.remove('opacity-0');
                el.classList.add('opacity-100');
            });

            toggleIcon.textContent = '←';
            sidebarExpanded = true;
        } else {
            sidebar.classList.add('hover:w-[13.9em]');
            sidebar.classList.remove('w-[13.9em]', '!opacity-100');
            sidebar.classList.add('group');

            // Reset opacity classes
            const shownElements = sidebar.querySelectorAll('.opacity-100');
            shownElements.forEach(el => {
                if (!el.id || el.id !== 'toggleIcon') {
                    el.classList.remove('opacity-100');
                    el.classList.add('opacity-0', 'group-hover:opacity-100');
                }
            });

            toggleIcon.textContent = '→';
            sidebarExpanded = false;

            // Close any open submenus
            closeAllSubmenus();
        }
    }

    function toggleSubmenu(menuId) {
        const menu = document.getElementById(menuId + '-menu');
        const arrow = document.getElementById(menuId + '-arrow');

        if (!menu || !arrow) return;

        if (menu.classList.contains('max-h-0')) {
            menu.classList.remove('max-h-0');
            menu.classList.add('max-h-96');
            arrow.textContent = '▼';
        } else {
            menu.classList.remove('max-h-96');
            menu.classList.add('max-h-0');
            arrow.textContent = '▶';
        }
    }

    function closeAllSubmenus() {
        const submenus = document.querySelectorAll('[id$="-menu"]');
        const arrows = document.querySelectorAll('[id$="-arrow"]');

        submenus.forEach(menu => {
            menu.classList.remove('max-h-96');
            menu.classList.add('max-h-0');
        });

        arrows.forEach(arrow => {
            arrow.textContent = '▶';
        });
    }

    // Enhanced functions for better navigation
    function loadAboutSection() {
        const basePath = getBasePath();
        if (window.location.pathname.includes('home.php')) {
            scrollToSection('about');
        } else {
            window.location.href = basePath + 'home.php#about';
        }
    }

    function loadServicesSection() {
        const basePath = getBasePath();
        if (window.location.pathname.includes('home.php')) {
            scrollToSection('services');
        } else {
            window.location.href = basePath + 'home.php#services';
        }
    }

    // Helper function to determine the correct base path
    function getBasePath() {
        const currentPath = window.location.pathname;
        if (currentPath.includes('/articles/')) {
            return '../';
        } else if (currentPath.includes('/components/') || currentPath.includes('/layout/')) {
            return '../';
        }
        return '';
    }

    // Enhanced article navigation functions
    function loadArticleCategory(category) {
        try {
            const currentPath = window.location.pathname;
            const basePath = getBasePath();

            if (currentPath.includes('articles/')) {
                window.location.href = `${category}.php`;
            } else {
                window.location.href = basePath + `articles/${category}.php`;
            }
        } catch (error) {
            console.error('Error loading article category:', error);
        }
    }

    function loadAllArticles() {
        try {
            const currentPath = window.location.pathname;
            const basePath = getBasePath();

            if (currentPath.includes('articles/')) {
                window.location.href = 'index.php';
            } else {
                window.location.href = basePath + 'articles/index.php';
            }
        } catch (error) {
            console.error('Error loading all articles:', error);
        }
    }

    // Enhanced contact page navigation
    function loadContactPage() {
        try {
            const basePath = getBasePath();
            window.location.href = basePath + 'contact.php';
        } catch (error) {
            console.error('Error loading contact page:', error);
        }
    }

    // Enhanced event gallery and photo gallery for cross-page navigation
    function loadEventGallery() {
        const mainContent = document.getElementById('mainContent');
        if (!mainContent) {
            // If mainContent doesn't exist, navigate to home page
            const basePath = getBasePath();
            window.location.href = basePath + 'home.php';
            return;
        }
        mainContent.innerHTML = `
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6">Galeri Acara</h2>
            <p class="text-gray-600 mb-8">Dokumentasi berbagai acara dan kegiatan perusahaan kami</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-100 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">🎊</div>
                    <h3 class="font-semibold mb-2">Ulang Tahun Perusahaan</h3>
                    <p class="text-sm text-gray-600">Perayaan Ulang Tahun ke-15</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">🏆</div>
                    <h3 class="font-semibold mb-2">Upacara Penghargaan</h3>
                    <p class="text-sm text-gray-600">Mitra Logistik Terbaik 2024</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="font-semibold mb-2">Acara Kemitraan</h3>
                    <p class="text-sm text-gray-600">Penandatanganan Kemitraan Strategis</p>
                </div>
            </div>
        </div>
    `;
    }

    function loadPhotoGallery() {
        const mainContent = document.getElementById('mainContent');
        if (!mainContent) {
            // If mainContent doesn't exist, navigate to home page
            const basePath = getBasePath();
            window.location.href = basePath + 'home.php';
            return;
        }
        mainContent.innerHTML = `
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6">Galeri Foto Klien</h2>
            <p class="text-gray-600 mb-8">Dokumentasi kegiatan dan kerjasama dengan klien-klien kami</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 flex items-center justify-center relative bg-cover bg-center bg-no-repeat" style="background-image: url('https://logisly.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findex_shipper.f2a6c4a1.jpg&w=3840&q=75');">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="text-center text-white relative z-10">
                            <span class="text-4xl mb-2 block drop-shadow-lg">📦</span>
                            <p class="text-sm font-medium drop-shadow-md">Muat Barang</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-2">PT. ABC Logistik</h3>
                        <p class="text-sm text-gray-600">Pengiriman barang elektronik ke Jakarta</p>
                        <span class="inline-block mt-2 text-xs bg-[#00a9ce] text-white px-2 py-1 rounded">2024</span>
                    </div>
                </div>

                <div class="bg-gray-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 flex items-center justify-center relative bg-cover bg-center bg-no-repeat" style="background-image: url('https://logisly.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findex_ts.d27e9841.jpg&w=3840&q=75');">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="text-center text-white relative z-10">
                            <span class="text-4xl mb-2 block drop-shadow-lg">📦</span>
                            <p class="text-sm font-medium drop-shadow-md">Muat Barang</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-2">CV. Maju Bersama</h3>
                        <p class="text-sm text-gray-600">Armada truk untuk distribusi nasional</p>
                        <span class="inline-block mt-2 text-xs bg-[#00a9ce] text-white px-2 py-1 rounded">2024</span>
                    </div>
                </div>

                <div class="bg-gray-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 flex items-center justify-center relative bg-cover bg-center bg-no-repeat" style="background-image: url('https://logisly.com/_next/image?url=%2Fstatic%2Fimg%2Fkumpulan-truk.png&w=3840&q=75');">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="text-center text-white relative z-10">
                            <span class="text-4xl mb-2 block drop-shadow-lg">📦</span>
                            <p class="text-sm font-medium drop-shadow-md">Muat Barang</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 mb-2">PT. Global Trading</h3>
                        <p class="text-sm text-gray-600">Fasilitas gudang modern di Surabaya</p>
                        <span class="inline-block mt-2 text-xs bg-[#00a9ce] text-white px-2 py-1 rounded">2023</span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-6 py-3 rounded-lg transition-colors duration-300 font-medium">
                    Muat Lebih Banyak Foto
                </button>
            </div>
        </div>
    `;
    }

    function loadKamiLogin() {
        const mainContent = document.getElementById('mainContent');
        mainContent.innerHTML = `
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6">Tim Kami</h2>
            <p class="text-gray-600 mb-8">Bertemu dengan tim profesional yang siap melayani kebutuhan logistik Anda</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <div class="w-20 h-20 bg-[#00a9ce] rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl">👨</div>
                    <h3 class="font-semibold text-gray-800 mb-2">John Doe</h3>
                    <p class="text-sm text-gray-600">CEO & Founder</p>
                </div>
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <div class="w-20 h-20 bg-[#00a9ce] rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl">👩</div>
                    <h3 class="font-semibold text-gray-800 mb-2">Jane Smith</h3>
                    <p class="text-sm text-gray-600">Operations Manager</p>
                </div>
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <div class="w-20 h-20 bg-[#00a9ce] rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl">👨</div>
                    <h3 class="font-semibold text-gray-800 mb-2">Mike Johnson</h3>
                    <p class="text-sm text-gray-600">Logistics Director</p>
                </div>
            </div>
        </div>
    `;
    }

    function loadSignIn() {
        const mainContent = document.getElementById('mainContent');
        if (!mainContent) {
            // If mainContent doesn't exist, navigate to home page
            const basePath = getBasePath();
            window.location.href = basePath + 'home.php';
            return;
        }
        mainContent.innerHTML = `
        <div class="bg-white rounded-lg shadow-md p-8 max-w-md mx-auto">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6 text-center">Masuk</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]">
                </div>
                <button type="submit" class="w-full bg-[#00a9ce] text-white py-2 px-4 rounded-md hover:bg-[#007a9c] transition-colors">
                    Masuk
                </button>
            </form>
        </div>
    `;
    }

    function loadSignUp() {
        const mainContent = document.getElementById('mainContent');
        if (!mainContent) {
            // If mainContent doesn't exist, navigate to home page
            const basePath = getBasePath();
            window.location.href = basePath + 'home.php';
            return;
        }
        mainContent.innerHTML = `
        <div class="bg-white rounded-lg shadow-md p-8 max-w-md mx-auto">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6 text-center">Daftar</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce]">
                </div>
                <button type="submit" class="w-full bg-[#00a9ce] text-white py-2 px-4 rounded-md hover:bg-[#007a9c] transition-colors">
                    Daftar
                </button>
            </form>
        </div>
    `;
    }

    // Add navigation to home page function
    function goToHome() {
        const basePath = getBasePath();
        window.location.href = basePath + 'home.php';
    }

    // Initialize sidebar state
    document.addEventListener('DOMContentLoaded', function() {
        closeAllSubmenus();
    });
</script>