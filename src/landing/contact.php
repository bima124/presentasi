<?php include 'layout/header.php' ?>

<?php include 'components/navbar.php' ?>

<!-- Side Bar kiri -->
<?php include 'components/sidebar.php' ?>

<!-- Main Content Area -->
<div class="ml-[8em] p-6 pt-[15em]" id="mainContent">
    <!-- Page Header -->
    <div class="bg-gradient-to-r from-[#00a9ce] to-[#007a9c] rounded-lg shadow-md p-8 mb-8 text-white">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Hubungi Kami</h1>
            <p class="text-lg">Kami siap membantu kebutuhan logistik Anda. Jangan ragu untuk menghubungi tim profesional kami.</p>
        </div>
    </div>

    <!-- Contact Information & Form -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        <!-- Contact Information -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-[#00a9ce] mb-6">Informasi Kontak</h2>

            <div class="space-y-6">
                <!-- Address -->
                <div class="flex items-start">
                    <div class="text-2xl text-[#00a9ce] mr-4 mt-1">📍</div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Alamat Kantor Pusat</h3>
                        <p class="text-gray-600">Jl. Logistik Raya No. 123<br>Jakarta Utara 14240<br>DKI Jakarta, Indonesia</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start">
                    <div class="text-2xl text-[#00a9ce] mr-4 mt-1">📞</div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Telepon</h3>
                        <p class="text-gray-600">+62 21 1234 5678</p>
                        <p class="text-gray-600">+62 812 3456 7890 (WhatsApp)</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start">
                    <div class="text-2xl text-[#00a9ce] mr-4 mt-1">✉️</div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Email</h3>
                        <p class="text-gray-600">info@swiftlogistik.co.id</p>
                        <p class="text-gray-600">sales@swiftlogistik.co.id</p>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="flex items-start">
                    <div class="text-2xl text-[#00a9ce] mr-4 mt-1">🕐</div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Jam Operasional</h3>
                        <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00 WIB</p>
                        <p class="text-gray-600">Sabtu: 08:00 - 12:00 WIB</p>
                        <p class="text-gray-600">Minggu: Tutup</p>
                        <p class="text-sm text-[#00a9ce] mt-2">* Layanan darurat 24/7 tersedia</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-[#00a9ce] mb-6">Kirim Pesan</h2>

            <form class="space-y-4" onsubmit="handleContactForm(event)">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Perusahaan</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce] focus:border-transparent">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                        <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce] focus:border-transparent">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Layanan</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce] focus:border-transparent">
                        <option value="">Pilih Layanan</option>
                        <option value="freight">Freight Forwarding</option>
                        <option value="warehouse">Pergudangan</option>
                        <option value="transport">Transportasi</option>
                        <option value="consulting">Konsultasi</option>
                        <option value="export">Ekspor Impor</option>
                        <option value="other">Lainnya</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                    <textarea rows="5" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00a9ce] focus:border-transparent" placeholder="Jelaskan kebutuhan logistik Anda..."></textarea>
                </div>

                <button type="submit" class="w-full bg-[#00a9ce] hover:bg-[#007a9c] text-white py-3 px-6 rounded-md font-semibold transition-colors duration-300">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>

    <!-- Location & Branches -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
        <!-- Map Placeholder -->
        <div class="lg:col-span-2 bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-[#00a9ce] mb-6">Lokasi Kami</h2>
            <div class="bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                <div class="text-center text-gray-600">
                    <div class="text-4xl mb-4">🗺️</div>
                    <p>Peta Lokasi Swift Logistik</p>
                    <p class="text-sm">Jl. Logistik Raya No. 123, Jakarta Utara</p>
                </div>
            </div>
        </div>

        <!-- Branch Offices -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-[#00a9ce] mb-6">Cabang Kami</h2>
            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-3">
                    <h3 class="font-semibold text-gray-800">Jakarta Pusat</h3>
                    <p class="text-sm text-gray-600">Jl. Sudirman No. 45</p>
                    <p class="text-sm text-[#00a9ce]">+62 21 2345 6789</p>
                </div>
                <div class="border-b border-gray-200 pb-3">
                    <h3 class="font-semibold text-gray-800">Surabaya</h3>
                    <p class="text-sm text-gray-600">Jl. Tanjungsari No. 78</p>
                    <p class="text-sm text-[#00a9ce]">+62 31 3456 7890</p>
                </div>
                <div class="border-b border-gray-200 pb-3">
                    <h3 class="font-semibold text-gray-800">Medan</h3>
                    <p class="text-sm text-gray-600">Jl. Gatot Subroto No. 12</p>
                    <p class="text-sm text-[#00a9ce]">+62 61 4567 8901</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800">Makassar</h3>
                    <p class="text-sm text-gray-600">Jl. AP Pettarani No. 34</p>
                    <p class="text-sm text-[#00a9ce]">+62 411 5678 9012</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Contact Options -->
    <div class="bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-[#00a9ce] mb-6 text-center">Hubungi Kami Sekarang</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:border-[#00a9ce] transition-colors">
                <div class="text-4xl mb-4">📞</div>
                <h3 class="font-semibold text-gray-800 mb-2">Telepon</h3>
                <p class="text-sm text-gray-600 mb-4">Hubungi langsung tim customer service kami</p>
                <a href="tel:+6221123456778" class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-4 py-2 rounded-lg transition-colors text-sm">
                    Hubungi Sekarang
                </a>
            </div>

            <div class="text-center p-6 border border-gray-200 rounded-lg hover:border-[#00a9ce] transition-colors">
                <div class="text-4xl mb-4">💬</div>
                <h3 class="font-semibold text-gray-800 mb-2">WhatsApp</h3>
                <p class="text-sm text-gray-600 mb-4">Chat langsung untuk respon yang cepat</p>
                <a href="https://wa.me/6281234567890" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors text-sm">
                    Chat WhatsApp
                </a>
            </div>

            <div class="text-center p-6 border border-gray-200 rounded-lg hover:border-[#00a9ce] transition-colors">
                <div class="text-4xl mb-4">✉️</div>
                <h3 class="font-semibold text-gray-800 mb-2">Email</h3>
                <p class="text-sm text-gray-600 mb-4">Kirim email untuk pertanyaan detail</p>
                <a href="mailto:info@swiftlogistik.co.id" class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-4 py-2 rounded-lg transition-colors text-sm">
                    Kirim Email
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function handleContactForm(event) {
        event.preventDefault();

        // Show success message (in real implementation, you'd send data to server)
        alert('Terima kasih! Pesan Anda telah dikirim. Tim kami akan menghubungi Anda dalam 1x24 jam.');

        // Reset form
        event.target.reset();
    }

    // Function to load contact page from sidebar/navbar
    function loadContactPage() {
        window.location.href = 'contact.php';
    }
</script>

<?php include 'layout/end-header.php' ?>