<?php
$konten_halaman = [
    [
        'halaman' => 'Profil',
        'link' => 'aboutme.php',
        'teks' => [
            'Syahrul Mubarok',
            'Profesi: Branch Manager',
            'Lokasi: Tidak dicantumkan',
            'Berpengalaman dalam memimpin operasional cabang, mengelola tim, dan mencapai target bisnis.',
            'Tentang Saya',
            'Saya adalah lulusan MAS Al-Kautsar yang berpengalaman sebagai Branch Manager dan Sales Promotion Girl. Saya terbiasa memimpin operasional, membina tim, melayani pelanggan, mengelola inventaris, serta menyusun laporan dengan teliti. Saya memiliki rata-rata nilai 91,90 dan berorientasi pada pencapaian target serta pertumbuhan bisnis.',
            'Pendidikan',
            'MAS Al-Kautsar, Karawang · Jurusan Ilmu Pengetahuan Alam',
            'Rata-rata nilai 91,90. Aktif dalam OSIS, Pramuka, Paskibra, kegiatan musik, dan kepanitiaan sosialisasi tahunan.',
            'Skill',
            'Leadership & Team Management',
            'Customer Service',
            'Sales & Target Achievement',
            'Administrasi & Pelaporan',
            'Inventory Control & Stock Opname',
            'Operasional Cabang',
        ],
    ],
    [
        'halaman' => 'Riwayat Karir',
        'link' => 'karir.php',
        'teks' => [
            'Syahrul Mubarok',
            'Profesi: Branch Manager',
            'Lokasi: Tidak dicantumkan',
            'Pengalaman Kerja',
            'PT Solusi Gadai Jabar',
            'Branch Manager',
            'Memimpin dan mengawasi operasional harian cabang agar berjalan sesuai Standar Operasional Prosedur (SOP).',
            'Menyusun strategi dan mengarahkan tim untuk mencapai target pertumbuhan bisnis, penambahan nasabah, serta profitabilitas cabang.',
            'Membina tim, mengatur jadwal, dan mengevaluasi kinerja karyawan secara berkala.',
            'Memastikan akurasi laporan keuangan harian dan bulanan serta mengawasi keamanan aset dan barang jaminan.',
            'CV Maju Jaya Gemilang, Karawang',
            'Sales Promotion Girl (SPG) · Mei–Desember 2025',
            'Menyambut dan melayani pelanggan, menjelaskan produk, serta menawarkan keunggulan barang untuk mendukung target penjualan harian.',
            'Melakukan stock opname lebih dari 500 item secara berkala dengan akurasi tinggi.',
            'Menata produk di area display dan gudang agar rapi, menarik, dan mudah diambil.',
            'Membuat rekap penjualan harian dan laporan transaksi secara tertib dan akurat.',
        ],
    ],
    [
        'halaman' => 'Prestasi Sekolah',
        'link' => 'prestasi.php',
        'teks' => [
            'Syahrul Mubarok',
            'Profesi: Branch Manager',
            'Lokasi: Tidak dicantumkan',
            'Pendidikan & Prestasi',
            'MAS Al-Kautsar, Karawang',
            'Jurusan: Ilmu Pengetahuan Alam',
            'Masuk 3 besar murid dengan nilai terbaik selama kelas 10–12.',
            'Meraih medali emas nasional bidang studi ekonomi.',
            'Rata-rata nilai 91,90.',
            'Kegiatan Sekolah',
            'Aktif dalam OSIS, Pramuka, Paskibra, kegiatan musik, dan kepanitiaan sosialisasi tahunan.',
            'Pelajaran relevan: Ekonomi, Teknologi Informasi & Komunikasi (TIK), dan Bahasa Inggris.',
        ],
    ],
    [
        'halaman' => 'Kontak',
        'link' => 'kontak.php',
        'teks' => [
            'Syahrul Mubarok',
            'Profesi: Branch Manager',
            'Lokasi: Tidak dicantumkan',
            'Email: syahrul.mubarok@rosma.ac.id',
            'LinkedIn: Profil Syahrul Mubarok',
            'Hubungi Saya',
            'Silakan tinggalkan pesan melalui formulir di bawah ini atau hubungi saya melalui email.',
        ],
    ],
];

function cariData(array $halaman, string $keyword): array
{
    $hasil = [];

    foreach ($halaman as $data_halaman) {
        foreach ($data_halaman['teks'] as $teks) {
            if (stripos($teks, $keyword) !== false) {
                $hasil[] = [
                    'halaman' => $data_halaman['halaman'],
                    'link' => $data_halaman['link'],
                    'teks' => $teks,
                ];
            }
        }
    }

    return $hasil;
}

$keyword = isset($_GET['keyword']) && is_string($_GET['keyword'])
    ? trim($_GET['keyword'])
    : '';
$keyword_bersih = htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8');
$hasil_pencarian = $keyword !== '' ? cariData($konten_halaman, $keyword) : [];
?>
<?php
$pageTitle = 'Hasil Pencarian - Profil Saya';
$activePage = '';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
?>

    <div class="container-layout">
        <main>
            <article>
                <h2>Hasil Pencarian untuk: "<?= $keyword_bersih ?>"</h2>
                <hr class="search-divider">
                
                <?php if (isset($_GET['keyword'])): ?>
                    
                    <?php if (count($hasil_pencarian) > 0): ?>
                        <ul>
                            <?php foreach ($hasil_pencarian as $hasil): ?>
                                <li class="search-result-item">
                                    <h3><a href="<?= htmlspecialchars($hasil['link'], ENT_QUOTES, 'UTF-8') ?>">Halaman <?= htmlspecialchars($hasil['halaman'], ENT_QUOTES, 'UTF-8') ?></a></h3>
                                    <p><?= htmlspecialchars($hasil['teks'], ENT_QUOTES, 'UTF-8') ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <!-- Pesan jelas jika tidak ditemukan -->
                        <div class="alert alert-error">
                            <?php if ($keyword === ''): ?>
                                Masukkan kata kunci untuk mencari konten.
                            <?php else: ?>
                                Konten dengan kata kunci <strong>"<?= $keyword_bersih ?>"</strong> tidak ditemukan.
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                <?php else: ?>
                    <p>Silakan masukkan kata kunci pencarian di kolom atas.</p>
                <?php endif; ?>

            </article>
            <?php require __DIR__ . '/includes/pagination.php'; ?>
        </main>
    </div>

<?php require __DIR__ . '/includes/footer.php'; ?>