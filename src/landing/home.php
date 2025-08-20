<?php include 'layout/header.php' ?>

<?php include 'components/navbar.php' ?>

<!-- Side Bar kiri -->
<?php include 'components/sidebar.php' ?>

<!-- Main Content Area -->
<div class="ml-[8em] p-6 pt-[15em]" id="mainContent">
    <!-- Hero Carousel Section -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
        <div class="relative h-96" id="carousel">
            <!-- Slide 1 -->
            <div class="carousel-slide active absolute inset-0 flex items-center justify-between px-12" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('https://cdn.pixabay.com/photo/2017/01/29/15/21/container-2018508_1280.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="text-white max-w-md">
                    <h1 class="text-4xl font-bold mb-4">Solusi Swift Logistik</h1>
                    <p class="text-lg mb-6">Menghadirkan keunggulan di seluruh nusantara dengan layanan pengiriman dan logistik yang terpercaya</p>
                    <button class="bg-white text-[#00a9ce] px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Dapatkan Penawaran
                    </button>
                </div>
            </div>

            <div class="carousel-slide absolute inset-0 flex items-center justify-between px-12" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('https://cdn.pixabay.com/photo/2017/01/29/15/15/containers-2018438_1280.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="text-white max-w-md">
                    <h1 class="text-4xl font-bold mb-4">Jangkauan Jaringan Global</h1>
                    <p class="text-lg mb-6">Hubungkan bisnis Anda ke seluruh dunia dengan jaringan logistik yang luas</p>
                    <button class="bg-white text-[#00a9ce] px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Dapatkan Penawaran
                    </button>
                </div>
            </div>

            <div class="carousel-slide absolute inset-0 flex items-center justify-between px-12" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('https://cdn.pixabay.com/photo/2019/05/12/06/14/container-4197259_1280.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="text-white max-w-md">
                    <h1 class="text-4xl font-bold mb-4">Fasilitas Gudang Modern</h1>
                    <p class="text-lg mb-6">Solusi penyimpanan terdepan untuk semua kebutuhan logistik Anda</p>
                    <button class="bg-white text-[#00a9ce] px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Dapatkan Penawaran
                    </button>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button onclick="prevSlide()" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 text-white p-2 rounded-full hover:bg-opacity-30 transition-all">
                ←
            </button>
            <button onclick="nextSlide()" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 text-white p-2 rounded-full hover:bg-opacity-30 transition-all">
                →
            </button>

            <!-- Indicators -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button onclick="currentSlide(1)" class="carousel-indicator w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100 active"></button>
                <button onclick="currentSlide(2)" class="carousel-indicator w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100"></button>
                <button onclick="currentSlide(3)" class="carousel-indicator w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100"></button>
            </div>
        </div>
    </div>

    <!-- Company Overview Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8" id="about">
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-6">Tentang Swift Logistik</h2>
            <p class="text-gray-600 mb-4">Dengan pengalaman lebih dari 15 tahun di industri logistik, Swift Logistik telah menjadi mitra terpercaya bagi bisnis di seluruh Indonesia.</p>
            <p class="text-gray-600 mb-6">Kami mengkhususkan diri dalam layanan freight forwarding, pergudangan, dan distribusi yang membantu klien mengoptimalkan operasi rantai pasokan mereka.</p>
            <div class="grid grid-cols-2 gap-4 text-center">
                <div class="bg-[#00a9ce] bg-opacity-10 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-[#00a9ce]">500+</div>
                    <div class="text-sm text-gray-600">Klien Senang</div>
                </div>
                <div class="bg-[#00a9ce] bg-opacity-10 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-[#00a9ce]">50+</div>
                    <div class="text-sm text-gray-600">Kota Terjangkau</div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8">
            <h3 class="text-2xl font-bold text-[#00a9ce] mb-6">Mengapa Memilih Kami</h3>
            <div class="space-y-4">
                <div class="flex items-start">
                    <span class="text-[#00a9ce] mr-3 mt-1">✓</span>
                    <div>
                        <h4 class="font-semibold text-gray-800">Layanan Terpercaya</h4>
                        <p class="text-sm text-gray-600">Pengiriman tepat waktu dijamin</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-[#00a9ce] mr-3 mt-1">✓</span>
                    <div>
                        <h4 class="font-semibold text-gray-800">Harga Kompetitif</h4>
                        <p class="text-sm text-gray-600">Tarif terbaik di pasar</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-[#00a9ce] mr-3 mt-1">✓</span>
                    <div>
                        <h4 class="font-semibold text-gray-800">Dukungan 24/7</h4>
                        <p class="text-sm text-gray-600">Layanan pelanggan sepanjang waktu</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-[#00a9ce] mr-3 mt-1">✓</span>
                    <div>
                        <h4 class="font-semibold text-gray-800">Pelacakan Canggih</h4>
                        <p class="text-sm text-gray-600">Pemantauan kiriman secara real-time</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision and Mission Section -->
    <div class="bg-white rounded-lg shadow-md p-8 mb-8" id="visi-misi">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-[#00a9ce] mb-4">Visi & Misi</h2>
            <p class="text-gray-600">Komitmen kami untuk memberikan layanan logistik terbaik</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Visi -->
            <div class="bg-gradient-to-br from-[#00a9ce] to-[#007a9c] rounded-lg p-8 text-white">
                <div class="text-center mb-6">
                    <div class="text-5xl mb-4">🎯</div>
                    <h3 class="text-2xl font-bold">VISI</h3>
                </div>
                <p class="text-lg leading-relaxed text-center">
                    Menjadi perusahaan logistik terdepan di Indonesia yang memberikan solusi transportasi dan distribusi yang inovatif, terpercaya, dan berkelanjutan untuk mendukung pertumbuhan ekonomi nasional.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg p-8 border border-gray-200">
                <div class="text-center mb-6">
                    <div class="text-5xl mb-4">🚀</div>
                    <h3 class="text-2xl font-bold text-[#00a9ce]">MISI</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <span class="text-[#00a9ce] mr-3 mt-1 text-lg">•</span>
                        <p class="text-gray-700">Menyediakan layanan logistik berkualitas tinggi dengan teknologi terdepan dan SDM profesional</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-[#00a9ce] mr-3 mt-1 text-lg">•</span>
                        <p class="text-gray-700">Membangun jaringan distribusi yang luas dan efisien di seluruh nusantara</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-[#00a9ce] mr-3 mt-1 text-lg">•</span>
                        <p class="text-gray-700">Memberikan solusi logistik yang cost-effective dan tepat waktu kepada seluruh klien</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-[#00a9ce] mr-3 mt-1 text-lg">•</span>
                        <p class="text-gray-700">Berkontribusi pada pertumbuhan ekonomi dengan mendukung perdagangan nasional dan internasional</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-[#00a9ce] mr-3 mt-1 text-lg">•</span>
                        <p class="text-gray-700">Menerapkan praktik bisnis yang berkelanjutan dan ramah lingkungan</p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Values Section -->
        <div class="mt-8 pt-8 border-t border-gray-200">
            <h3 class="text-2xl font-bold text-[#00a9ce] text-center mb-8">Nilai-Nilai Perusahaan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center p-4">
                    <div class="text-3xl mb-3">🤝</div>
                    <h4 class="font-semibold text-gray-800 mb-2">INTEGRITAS</h4>
                    <p class="text-sm text-gray-600">Berkomitmen pada kejujuran dan transparansi dalam setiap pelayanan</p>
                </div>
                <div class="text-center p-4">
                    <div class="text-3xl mb-3">⚡</div>
                    <h4 class="font-semibold text-gray-800 mb-2">EFISIENSI</h4>
                    <p class="text-sm text-gray-600">Mengoptimalkan setiap proses untuk hasil yang maksimal</p>
                </div>
                <div class="text-center p-4">
                    <div class="text-3xl mb-3">💡</div>
                    <h4 class="font-semibold text-gray-800 mb-2">INOVASI</h4>
                    <p class="text-sm text-gray-600">Terus berinovasi dengan teknologi dan metode terbaru</p>
                </div>
                <div class="text-center p-4">
                    <div class="text-3xl mb-3">🌟</div>
                    <h4 class="font-semibold text-gray-800 mb-2">EXCELLENCE</h4>
                    <p class="text-sm text-gray-600">Memberikan yang terbaik dalam setiap layanan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="bg-white rounded-lg shadow-md p-8 mb-8" id="services">
        <h2 class="text-3xl font-bold text-[#00a9ce] mb-8 text-center">Layanan Kami</h2>

        <!-- Services Carousel Container -->
        <div class="relative">
            <!-- Navigation Buttons -->
            <button onclick="scrollServices(-1)" class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-4 bg-[#00a9ce] hover:bg-[#007a9c] text-white p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110 z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button onclick="scrollServices(1)" class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-4 bg-[#00a9ce] hover:bg-[#007a9c] text-white p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110 z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Services Carousel -->
            <div id="servicesCarousel" class="overflow-x-auto overflow-y-hidden scroll-smooth scrollbar-hide">
                <div class="flex space-x-6 pb-4" style="width: max-content;">
                    <!-- Service Card 1 -->
                    <div class="flex-none w-80 text-center p-6 border border-gray-200 rounded-lg hover:border-[#00a9ce] hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">📦</div>
                        <h3 class="font-semibold text-gray-800 mb-2 text-lg">Freight Forwarding</h3>
                        <p class="text-sm text-gray-600 mb-4">Solusi pengiriman domestik dan internasional dengan jaringan yang luas</p>
                        <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-4 py-2 rounded-lg transition-colors text-sm">
                            Selengkapnya
                        </button>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="flex-none w-80 text-center p-6 border border-gray-200 rounded-lg hover:border-[#00a9ce] hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">🏢</div>
                        <h3 class="font-semibold text-gray-800 mb-2 text-lg">Pergudangan</h3>
                        <p class="text-sm text-gray-600 mb-4">Penyimpanan aman dan manajemen inventaris dengan teknologi modern</p>
                        <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-4 py-2 rounded-lg transition-colors text-sm">
                            Selengkapnya
                        </button>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="flex-none w-80 text-center p-6 border border-gray-200 rounded-lg hover:border-[#00a9ce] hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">🚛</div>
                        <h3 class="font-semibold text-gray-800 mb-2 text-lg">Transportasi</h3>
                        <p class="text-sm text-gray-600 mb-4">Transportasi darat dan layanan pengantaran door-to-door</p>
                        <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-4 py-2 rounded-lg transition-colors text-sm">
                            Selengkapnya
                        </button>
                    </div>

                    <!-- Service Card 4 -->
                    <div class="flex-none w-80 text-center p-6 border border-gray-200 rounded-lg hover:border-[#00a9ce] hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">📋</div>
                        <h3 class="font-semibold text-gray-800 mb-2 text-lg">Konsultasi</h3>
                        <p class="text-sm text-gray-600 mb-4">Optimisasi rantai pasokan dan konsultasi strategi logistik</p>
                        <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-4 py-2 rounded-lg transition-colors text-sm">
                            Selengkapnya
                        </button>
                    </div>

                    <!-- Service Card 5 (Additional for demonstration) -->
                    <div class="flex-none w-80 text-center p-6 border border-gray-200 rounded-lg hover:border-[#00a9ce] hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">🌍</div>
                        <h3 class="font-semibold text-gray-800 mb-2 text-lg">Ekspor Impor</h3>
                        <p class="text-sm text-gray-600 mb-4">Layanan ekspor impor dengan pengurusan dokumen lengkap</p>
                        <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-4 py-2 rounded-lg transition-colors text-sm">
                            Selengkapnya
                        </button>
                    </div>

                    <!-- Service Card 6 (Additional for demonstration) -->
                    <div class="flex-none w-80 text-center p-6 border border-gray-200 rounded-lg hover:border-[#00a9ce] hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">📱</div>
                        <h3 class="font-semibold text-gray-800 mb-2 text-lg">Tracking System</h3>
                        <p class="text-sm text-gray-600 mb-4">Sistem pelacakan real-time untuk monitoring pengiriman</p>
                        <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-4 py-2 rounded-lg transition-colors text-sm">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicators -->
            <div class="flex justify-center mt-6 space-x-2" id="serviceIndicators">
                <!-- Indicators will be generated by JavaScript -->
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="bg-white rounded-lg shadow-md p-8" id="testimonials">
        <h2 class="text-3xl font-bold text-[#00a9ce] mb-8 text-center">Testimoni Klien</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 p-6 rounded-lg">
                <div class="text-[#00a9ce] mb-4">★★★★★</div>
                <p class="text-gray-600 mb-4">"Swift Logistik telah menjadi mitra terpercaya kami selama 5 tahun. Layanan yang andal dan harga yang kompetitif membuat mereka menonjol."</p>
                <div class="font-semibold text-gray-800">- PT. Global Trading</div>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <div class="text-[#00a9ce] mb-4">★★★★★</div>
                <p class="text-gray-600 mb-4">"Tim profesional, fasilitas modern, dan layanan pelanggan yang sangat baik. Sangat direkomendasikan untuk solusi logistik."</p>
                <div class="font-semibold text-gray-800">- CV. Maju Bersama</div>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <div class="text-[#00a9ce] mb-4">★★★★★</div>
                <p class="text-gray-600 mb-4">"Sistem pelacakan canggih dan dukungan 24/7 memberikan ketenangan pikiran untuk semua pengiriman kami."</p>
                <div class="font-semibold text-gray-800">- PT. Express Delivery</div>
            </div>
        </div>
    </div>
</div>

<style>
    .carousel-slide {
        transition: opacity 0.5s ease-in-out;
    }

    .carousel-indicator.active {
        opacity: 1;
    }

    /* Hide scrollbar */
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    /* Service carousel smooth scrolling */
    #servicesCarousel {
        scroll-behavior: smooth;
    }

    /* Service indicator styles */
    .service-indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #e5e7eb;
        transition: background-color 0.3s ease;
        cursor: pointer;
    }

    .service-indicator.active {
        background-color: #00a9ce;
    }
</style>

<script>
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.carousel-indicator');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
        });

        indicators.forEach((indicator, i) => {
            if (i === index) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }

    function nextSlide() {
        currentSlideIndex = (currentSlideIndex + 1) % slides.length;
        showSlide(currentSlideIndex);
    }

    function prevSlide() {
        currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
        showSlide(currentSlideIndex);
    }

    function currentSlide(index) {
        currentSlideIndex = index - 1;
        showSlide(currentSlideIndex);
    }

    // Services carousel functionality
    const servicesCarousel = document.getElementById('servicesCarousel');
    const serviceCards = servicesCarousel.querySelectorAll('.flex-none');
    let currentServiceIndex = 0;

    // Create service indicators
    function createServiceIndicators() {
        const indicatorsContainer = document.getElementById('serviceIndicators');
        const totalCards = serviceCards.length;
        const visibleCards = Math.floor(servicesCarousel.clientWidth / 320); // 320px = card width + gap
        const totalIndicators = Math.max(1, totalCards - visibleCards + 1);

        for (let i = 0; i < totalIndicators; i++) {
            const indicator = document.createElement('div');
            indicator.className = `service-indicator ${i === 0 ? 'active' : ''}`;
            indicator.onclick = () => scrollToServiceIndex(i);
            indicatorsContainer.appendChild(indicator);
        }
    }

    // Scroll services carousel
    function scrollServices(direction) {
        const cardWidth = 320; // Card width + gap
        const currentScroll = servicesCarousel.scrollLeft;
        const newScroll = currentScroll + (direction * cardWidth);

        servicesCarousel.scrollLeft = newScroll;
        updateServiceIndicators();
    }

    // Scroll to specific service index
    function scrollToServiceIndex(index) {
        const cardWidth = 320;
        servicesCarousel.scrollLeft = index * cardWidth;
        updateServiceIndicators();
    }

    // Update service indicators
    function updateServiceIndicators() {
        const indicators = document.querySelectorAll('.service-indicator');
        const cardWidth = 320;
        const currentIndex = Math.round(servicesCarousel.scrollLeft / cardWidth);

        indicators.forEach((indicator, index) => {
            if (index === currentIndex) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }

    // Touch/swipe support for mobile
    let isDown = false;
    let startX;
    let scrollLeft;

    servicesCarousel.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - servicesCarousel.offsetLeft;
        scrollLeft = servicesCarousel.scrollLeft;
    });

    servicesCarousel.addEventListener('mouseleave', () => {
        isDown = false;
    });

    servicesCarousel.addEventListener('mouseup', () => {
        isDown = false;
    });

    servicesCarousel.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - servicesCarousel.offsetLeft;
        const walk = (x - startX) * 2;
        servicesCarousel.scrollLeft = scrollLeft - walk;
    });

    // Touch events for mobile
    servicesCarousel.addEventListener('touchstart', (e) => {
        startX = e.touches[0].pageX - servicesCarousel.offsetLeft;
        scrollLeft = servicesCarousel.scrollLeft;
    });

    servicesCarousel.addEventListener('touchmove', (e) => {
        const x = e.touches[0].pageX - servicesCarousel.offsetLeft;
        const walk = (x - startX) * 2;
        servicesCarousel.scrollLeft = scrollLeft - walk;
    });

    // Initialize service indicators when page loads
    window.addEventListener('load', () => {
        createServiceIndicators();

        // Update indicators on scroll
        servicesCarousel.addEventListener('scroll', updateServiceIndicators);

        // Update indicators on window resize
        window.addEventListener('resize', () => {
            document.getElementById('serviceIndicators').innerHTML = '';
            createServiceIndicators();
        });
    });

    // Auto-slide every 5 seconds
    setInterval(nextSlide, 5000);

    // Enhanced navigation function
    function scrollToSection(sectionId) {
        const element = document.getElementById(sectionId);
        if (element) {
            const navbarHeight = 80;
            const elementPosition = element.offsetTop - navbarHeight;

            window.scrollTo({
                top: elementPosition,
                behavior: 'smooth'
            });

            // Update URL hash without triggering scroll
            history.pushState(null, null, '#' + sectionId);
        }
    }

    // Smooth scroll for carousel buttons that link to sections
    function scrollToServices() {
        scrollToSection('services');
    }

    function scrollToAbout() {
        scrollToSection('about');
    }

    // Update carousel buttons to be more functional
    document.addEventListener('DOMContentLoaded', function() {
        // Update "Dapatkan Penawaran" button to scroll to contact
        const getQuoteBtn = document.querySelector('.carousel-slide.active button');
        if (getQuoteBtn) {
            getQuoteBtn.onclick = function() {
                window.location.href = 'contact.php';
            };
        }

        // Update "Pelajari Lebih Lanjut" button to scroll to about
        const learnMoreBtns = document.querySelectorAll('.carousel-slide button');
        if (learnMoreBtns[1]) {
            learnMoreBtns[1].onclick = function() {
                scrollToSection('about');
            };
        }

        // Update "Lihat Fasilitas" button to scroll to services
        if (learnMoreBtns[2]) {
            learnMoreBtns[2].onclick = function() {
                scrollToSection('services');
            };
        }
    });
</script>

<!-- <?php include 'components/footer.php' ?> -->

<?php include 'layout/end-header.php' ?>