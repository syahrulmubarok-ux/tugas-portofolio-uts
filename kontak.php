<?php
$message = '';
$msg_class = '';

// Proses formulir hanya ketika request menggunakan method POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namaInput = $_POST['nama'] ?? '';
    $emailInput = $_POST['email'] ?? '';
    $pesanInput = $_POST['pesan'] ?? '';

    // Pastikan semua input berupa teks sebelum menjalankan trim().
    $nama = is_string($namaInput) ? trim($namaInput) : '';
    $email = is_string($emailInput) ? trim($emailInput) : '';
    $pesanTeks = is_string($pesanInput) ? trim($pesanInput) : '';

    if (empty($nama) || empty($email) || empty($pesanTeks)) {
        $message = 'Semua kolom wajib diisi!';
        $msg_class = 'alert-error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Format email tidak valid!';
        $msg_class = 'alert-error';
    } else {
        // Simpan data mentah dalam format JSON Lines; output HTML selalu di-escape.
        $dataDir = __DIR__ . '/data';
        if (!is_dir($dataDir)) {
            mkdir($dataDir, 0750, true);
        }

        $record = [
            'waktu' => date('Y-m-d H:i:s'),
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesanTeks,
        ];
        $jsonLine = json_encode($record, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL;
        $saved = file_put_contents($dataDir . '/pesan.txt', $jsonLine, FILE_APPEND | LOCK_EX);

        if ($saved !== false) {
            $namaAman = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
            $message = 'Terima kasih, ' . $namaAman . '! Pesan Anda berhasil dikirim.';
            $msg_class = 'alert-success';
        } else {
            $message = 'Maaf, terjadi kesalahan saat menyimpan pesan.';
            $msg_class = 'alert-error';
        }
    }
}

$pageTitle = 'Kontak - Profil Saya';
$activePage = 'kontak';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
?>

<div class="container-layout">
    <aside>
        <img src="assets/images/Screenshot 2026-10-30 075934.png" alt="Foto profil Syahrul Mubarok">
        <h2>Syahrul Mubarok</h2>
        <p><strong>Profesi:</strong> Branch Manager</p>
        <p><strong>Lokasi:</strong> Tidak dicantumkan</p>
        <p><strong>Email:</strong> <a href="mailto:syahrul.mubarok@rosma.ac.id">syahrul.mubarok@rosma.ac.id</a></p>
        <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/syahrul-mubarok-487057448/" target="_blank" rel="noopener noreferrer">Profil Syahrul Mubarok</a></p>
    </aside>

    <main>
        <article>
            <h2>Hubungi Saya</h2>
            <p>Silakan tinggalkan pesan melalui formulir di bawah ini atau hubungi saya melalui email.</p>

            <?php if ($message !== ''): ?>
                <div class="alert <?= htmlspecialchars($msg_class, ENT_QUOTES, 'UTF-8') ?>" role="status">
                    <?= $message ?>
                </div>
            <?php endif; ?>

            <form action="kontak.php" method="POST">
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda..." required>
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email:</label>
                    <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan Anda:</label>
                    <textarea id="pesan" name="pesan" rows="5" placeholder="Tuliskan pesan..." required></textarea>
                </div>
                <button type="submit" class="btn-submit">Kirim Pesan</button>
            </form>
        </article>
        <?php require __DIR__ . '/includes/pagination.php'; ?>
    </main>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
