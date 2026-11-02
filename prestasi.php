<?php
$pageTitle = 'Prestasi Sekolah - Profil Saya';
$activePage = 'prestasi';
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
                <h2>Pendidikan &amp; Prestasi</h2>
                <section class="achievement-card">
                    <h3>MAS Al-Kautsar, Karawang</h3>
                    <p><strong>Jurusan:</strong> Ilmu Pengetahuan Alam</p>
                    <ul>
                        <li>Masuk 3 besar murid dengan nilai terbaik selama kelas 10–12.</li>
                        <li>Meraih medali emas nasional bidang studi ekonomi.</li>
                        <li>Rata-rata nilai 91,90.</li>
                    </ul>
                </section>
                <section class="achievement-card">
                    <h3>Kegiatan Sekolah</h3>
                    <p>Aktif dalam OSIS, Pramuka, Paskibra, kegiatan musik, dan kepanitiaan sosialisasi tahunan.</p>
                    <p><strong>Pelajaran relevan:</strong> Ekonomi, Teknologi Informasi &amp; Komunikasi (TIK), dan Bahasa Inggris.</p>
                </section>
            </article>
            <?php require __DIR__ . '/includes/pagination.php'; ?>
        </main>
    </div>

<?php require __DIR__ . '/includes/footer.php'; ?>