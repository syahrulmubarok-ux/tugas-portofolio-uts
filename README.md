# Website Portofolio — Syahrul Mubarok

- **Nama:** Syahrul Mubarok
- **NIM:** 202501251007
- **Mata Kuliah:** Web Programming / Pemrograman Web 1
- **Tautan Vercel:** `GANTI_DENGAN_URL_VERCEL_SETELAH_DEPLOY`

## Isi proyek

- `index.html` — halaman utama statis untuk publikasi Vercel. Berisi elemen semantic HTML (`header`, `nav`, `main`, `article`, `aside`, dan `footer`), foto profil, dan tautan LinkedIn.
- `style.css` — styling dan layout Flexbox responsif.
- `search.php` — contoh pemrosesan pencarian menggunakan method GET (`$_GET`).
- `kontak.php` — contoh pemrosesan formulir menggunakan method POST (`$_POST`), validasi `trim()`, `empty()`, `filter_var()`, dan output aman dengan `htmlspecialchars()`.
- `aboutme.php`, `karir.php`, `prestasi.php` — halaman portofolio berbasis PHP.
- `includes/` — komponen header, navigasi, footer, dan pagination yang digunakan ulang.
- `assets/images/` — aset gambar dan video demo.

## Menjalankan demo PHP secara lokal

1. Ekstrak folder proyek ke direktori web server XAMPP, misalnya `htdocs/portofolio-UTS`.
2. Jalankan Apache dari XAMPP.
3. Buka `http://localhost/portofolio-UTS/`.
4. Uji pencarian melalui kolom Cari. Pastikan URL menggunakan `search.php?keyword=...`.
5. Buka halaman Kontak, isi formulir, lalu kirim. Pesan yang lolos validasi disimpan ke `data/pesan.txt` dalam format JSON Lines. Folder data dilindungi dari akses browser oleh `.htaccess`.

Alternatif menggunakan PHP CLI:

```bash
php -S localhost:8000
```

Jalankan perintah dari folder proyek, lalu buka `http://localhost:8000/`.

## Bukti demo PHP

Video demo lokal tersedia di:

`assets/images/video/About Me - Profil Saya - Google Chrome 2026-11-01 11-02-21.mp4`

[Klik untuk membuka video demo PHP](assets/images/video/About%20Me%20-%20Profil%20Saya%20-%20Google%20Chrome%202026-11-01%2011-02-21.mp4)

## Deploy tampilan ke Vercel

1. Unggah folder proyek ini ke repositori GitHub.
2. Impor repositori tersebut di Vercel dan gunakan root direktori proyek `portofolio-UTS`.
3. Deploy sebagai situs statis (tidak memerlukan build command).
4. Setelah berhasil, ganti `GANTI_DENGAN_URL_VERCEL_SETELAH_DEPLOY` di README ini dengan URL publik dari Vercel.

**Catatan:** Vercel tidak menjalankan PHP secara bawaan. Karena itu, `index.html` menjadi tampilan publik statis, sedangkan fitur `search.php` dan `kontak.php` harus didemonstrasikan melalui server PHP lokal (XAMPP atau `php -S localhost:8000`). Aturan di `vercel.json` mengarahkan permintaan file PHP dan folder data ke halaman 404 agar kode PHP serta data pesan tidak disajikan sebagai file statis.
