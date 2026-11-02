<?php
$pageTitle = 'About Me - Profil Saya';
$activePage = 'aboutme';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
?>

    <div class="container-layout">
        <aside>
            <img src="assets/images/Screenshot 2026-10-30 075934.png" alt="Foto profil Syahrul Mubarok">
            <h2>Syahrul Mubarok</h2>
            <p><strong>Profesi:</strong> Branch Manager</p>
            <p><strong>Lokasi:</strong> Tidak dicantumkan</p>
            <p>Berpengalaman dalam memimpin operasional cabang, mengelola tim, dan mencapai target bisnis.</p>
        </aside>

        <main>
            <article>
                <h2>Tentang Saya</h2>
                <p>
                    Saya adalah lulusan MAS Al-Kautsar yang berpengalaman sebagai Branch Manager dan Sales Promotion Girl. Saya terbiasa memimpin operasional, membina tim, melayani pelanggan, mengelola inventaris, serta menyusun laporan dengan teliti. Saya memiliki rata-rata nilai 91,90 dan berorientasi pada pencapaian target serta pertumbuhan bisnis.
                </p>
                <h3>Pendidikan</h3>
                <p><strong>MAS Al-Kautsar, Karawang</strong> · Jurusan Ilmu Pengetahuan Alam</p>
                <p>Rata-rata nilai 91,90. Aktif dalam OSIS, Pramuka, Paskibra, kegiatan musik, dan kepanitiaan sosialisasi tahunan.</p>

                <section class="skills-section" aria-labelledby="skills-heading">
                    <h3 id="skills-heading">Skill</h3>
                    <ul class="skills-list">
                        <li>Leadership &amp; Team Management</li>
                        <li>Customer Service</li>
                        <li>Sales &amp; Target Achievement</li>
                        <li>Administrasi &amp; Pelaporan</li>
                        <li>Inventory Control &amp; Stock Opname</li>
                        <li>Operasional Cabang</li>
                    </ul>
                </section>
            </article>
            <?php require __DIR__ . '/includes/pagination.php'; ?>
        </main>
    </div>

<?php require __DIR__ . '/includes/footer.php'; ?>
