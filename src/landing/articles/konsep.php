<?php 
include '../layout/header.php';
include '../components/navbar.php';
include '../components/sidebar.php';

// Database connection
require_once '../../admin/config.php';

// Fetch articles with kategori 'konsep'
$query = "SELECT * FROM artikel WHERE kategori = 'konsep' ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!-- Main Content Area -->
<div class="ml-[8em] p-6 pt-[15em]" id="mainContent">
    <!-- Breadcrumb -->
    <div class="mb-6">
        <nav class="text-sm text-gray-500">
            <a href="../home.php" class="hover:text-[#00a9ce]">Beranda</a>
            <span class="mx-2">></span>
            <a href="index.php" class="hover:text-[#00a9ce]">Artikel</a>
            <span class="mx-2">></span>
            <span class="text-[#00a9ce]">Konsep</span>
        </nav>
    </div>

    <!-- Header -->
    <div class="bg-gradient-to-br from-[#00a9ce] to-[#007a9c] rounded-lg shadow-md p-8 mb-8 text-white">
        <div class="text-center">
            <div class="text-5xl mb-4">💡</div>
            <h1 class="text-4xl font-bold mb-4">Artikel Konsep</h1>
            <p class="text-lg opacity-90">Memahami konsep dasar dan teori dalam dunia logistik modern</p>
        </div>
    </div>

    <!-- Articles Grid -->
    <div class="space-y-8">
        <?php 
        $colors = [
            ['bg' => 'from-blue-100 to-blue-200', 'text' => 'text-[#00a9ce]', 'button' => 'bg-[#00a9ce] hover:bg-[#007a9c]', 'tag-bg' => 'bg-[#00a9ce]'],
            ['bg' => 'from-green-100 to-green-200', 'text' => 'text-green-600', 'button' => 'bg-green-500 hover:bg-green-700', 'tag-bg' => 'bg-green-500'],
            ['bg' => 'from-emerald-100 to-emerald-200', 'text' => 'text-emerald-600', 'button' => 'bg-emerald-500 hover:bg-emerald-700', 'tag-bg' => 'bg-emerald-500']
        ];
        $icons = ['🔗', '🏢', '🌱'];
        $i = 0;

        while($artikel = mysqli_fetch_assoc($result)): 
            $color = $colors[$i % count($colors)];
            $icon = $icons[$i % count($icons)];
            $created_date = date('d F Y', strtotime($artikel['created_at']));
        ?>
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="md:flex">
                <div class="md:w-1/3 bg-gradient-to-br <?= $color['bg'] ?> p-8 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-6xl <?= $color['text'] ?> mb-4"><?= $icon ?></div>
                        <span class="text-sm text-gray-600 font-medium"><?= strtoupper(substr($artikel['judul'], 0, strpos($artikel['judul'], ':') ?: strlen($artikel['judul']))) ?></span>
                    </div>
                </div>
                <div class="md:w-2/3 p-8">
                    <div class="flex items-center mb-4">
                        <span class="<?= $color['tag-bg'] ?> text-white text-xs px-3 py-1 rounded-full font-medium">KONSEP DASAR</span>
                        <span class="text-gray-500 text-sm ml-4">📅 <?= $created_date ?></span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4"><?= $artikel['judul'] ?></h2>
                    <?php 
                    $paragraphs = explode("\n\n", $artikel['deskripsi']);
                    foreach($paragraphs as $p): 
                        if(trim($p) != ''): 
                    ?>
                        <p class="text-gray-600 mb-4"><?= $p ?></p>
                    <?php 
                        endif;
                    endforeach; 
                    ?>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <span>👤 Admin</span>
                            <span class="mx-2">•</span>
                            <span>⏱️ <?= rand(5, 10) ?> menit baca</span>
                        </div>
                        <button class="<?= $color['button'] ?> text-white px-6 py-2 rounded-md transition-colors text-sm font-medium">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </article>
        <?php 
            $i++;
        endwhile; 
        ?>
    </div>

    <!-- Load More Button -->
    <div class="text-center mt-8">
        <button class="bg-[#00a9ce] hover:bg-[#007a9c] text-white px-8 py-3 rounded-lg transition-colors font-medium">
            Muat Artikel Lainnya
        </button>
    </div>
</div>

<?php include '../layout/end-header.php' ?>