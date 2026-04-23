# Sistem Manajemen Booking Salon – Week 3

## Deskripsi

Project ini merupakan pengembangan dari tugas sebelumnya dengan menambahkan fitur berbasis PHP, yaitu penggunaan Session dan Cookies untuk autentikasi pengguna. Sistem yang dibuat adalah website booking salon yang memungkinkan pengguna melakukan pemesanan layanan serta menyimpan wishlist.

---

## Fitur Utama

### 1. Sistem Login (Session)

* Tersedia halaman login dengan input username dan password
* Validasi login menggunakan data hardcode
* Status login disimpan menggunakan PHP Session
* Setelah login berhasil, pengguna dapat mengakses halaman utama
* Session digunakan untuk menampilkan informasi user yang sedang login

### 2. Logout

* Tersedia tombol logout pada navbar
* Menghapus session yang sedang aktif
* Setelah logout, pengguna tetap berada di halaman utama (dashboard), namun status login hilang

### 3. Remember Me (Cookies)

* Jika checkbox "Remember Me" dipilih saat login:

  * Username akan disimpan dalam cookies
  * Saat membuka kembali halaman login, username otomatis terisi

### 4. Navbar Dinamis

* Jika pengguna belum login:

  * Menampilkan tombol Login
* Jika pengguna sudah login:

  * Menampilkan teks "Halo, username"
  * Menampilkan tombol Logout

---

## Teknologi yang Digunakan

* HTML
* CSS (Bootstrap 5)
* JavaScript
* PHP (Session dan Cookies)

---

## Struktur Project

/project
│
├── index.php
├── login.php
├── logout.php
├── auth.php
├── css/
├── js/
├── assets/

---

## Cara Menjalankan Project


1. Simpan project di folder htdocs/www
2. Akses melalui browser:
   http://localhost/nama-folder-project/login.php
3. Gunakan akun berikut untuk login:

   * Username: admin
   * Password: 123

---

## Catatan

* Session digunakan untuk mengatur status login pengguna
* Cookies digunakan untuk menyimpan username sementara
* Sistem ini masih menggunakan data statis (belum menggunakan database)

---

## Kesimpulan

Pada Week 3 ini, sistem telah berhasil dikembangkan menjadi lebih dinamis dengan menambahkan autentikasi menggunakan PHP Session dan Cookies. Fitur ini meningkatkan keamanan dan pengalaman pengguna dalam menggunakan sistem booking salon.
