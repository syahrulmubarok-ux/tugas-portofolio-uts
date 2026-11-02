<?php
$pageTitle = 'Riwayat Karir - Profil Saya';
$activePage = 'karir';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
?>

    <div class="container-layout">
        <aside>
            <img src="assets/images/Screenshot 2026-10-30 075934.png" alt="Foto profil Syahrul Mubarok">
            <h2>Syahrul Mubarok</h2>
            <p><strong>Profesi:</strong> Branch Manager</p>
            <p><strong>Lokasi:</strong> Tidak dicantumkan</p>
        </aside>

        <main>
            <article>
                <h2>Pengalaman Kerja</h2>
                <section class="experience-list">
                    <article class="experience-card">
                        <h3>PT Solusi Gadai Jabar</h3>
                        <p class="experience-meta">Branch Manager</p>
                        <ul>
                            <li>Memimpin dan mengawasi operasional harian cabang agar berjalan sesuai Standar Operasional Prosedur (SOP).</li>
                            <li>Menyusun strategi dan mengarahkan tim untuk mencapai target pertumbuhan bisnis, penambahan nasabah, serta profitabilitas cabang.</li>
                            <li>Membina tim, mengatur jadwal, dan mengevaluasi kinerja karyawan secara berkala.</li>
                            <li>Memastikan akurasi laporan keuangan harian dan bulanan serta mengawasi keamanan aset dan barang jaminan.</li>
                        </ul>
                    </article>
                    <article class="experience-card">
                        <h3>CV Maju Jaya Gemilang, Karawang</h3>
                        <p class="experience-meta">Sales Promotion Girl (SPG) · Mei–Desember 2025</p>
                        <ul>
                            <li>Menyambut dan melayani pelanggan, menjelaskan produk, serta menawarkan keunggulan barang untuk mendukung target penjualan harian.</li>
                            <li>Melakukan stock opname lebih dari 500 item secara berkala dengan akurasi tinggi.</li>
                            <li>Menata produk di area display dan gudang agar rapi, menarik, dan mudah diambil.</li>
                            <li>Membuat rekap penjualan harian dan laporan transaksi secara tertib dan akurat.</li>
                        </ul>
                    </article>
                </section>
            </article>

            <?php require __DIR__ . '/includes/pagination.php'; ?>
        </main>
    </div>

<?php require __DIR__ . '/includes/footer.php'; ?>