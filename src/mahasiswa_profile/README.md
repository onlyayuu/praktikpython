# Studentfolio — PHP Student Profile Landing Page

Landing page profil mahasiswa yang interaktif, responsif, dan bisa dijalankan secara lokal.

## Fitur
- Hero section dan profil mahasiswa
- About, informasi kampus, skill progress bars
- Kartu project yang membuka modal detail
- Dark mode dengan preferensi yang disimpan di browser
- Responsive mobile navigation
- Animasi reveal saat scroll
- Konten utama dirender menggunakan PHP

## Cara menjalankan di Windows
1. Install PHP. Cara praktis: install XAMPP dari https://www.apachefriends.org/
2. Ekstrak folder project ini.
3. Buka folder project di VS Code.
4. Buka terminal di folder `mahasiswa_profile`.
5. Jalankan:
   ```bash
   php -S localhost:8000
   ```
6. Buka Chrome ke `http://localhost:8000`.

> PHP tidak bisa dieksekusi hanya dengan membuka `index.php` langsung sebagai file di Chrome. Jalankan melalui PHP built-in server atau Apache di XAMPP.

## Cara menjalankan di macOS
Pastikan PHP tersedia (`php -v`), lalu dari terminal folder project jalankan:
```bash
php -S localhost:8000
```
Buka `http://localhost:8000`.

## Mengubah data profil
Buka bagian paling atas `index.php`, lalu edit array `$student`, `$skills`, dan `$projects`.
