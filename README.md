# sistem Manajemen Booking Salon – The Girls Club

## Deskripsi

Website ini merupakan sistem sederhana berbasis web yang digunakan untuk mengelola layanan salon, melakukan booking, serta menyimpan layanan favorit (wishlist). Sistem ini dibuat menggunakan HTML, CSS, JavaScript, dan Bootstrap.

---

## Fitur Utama

### 1. Dark Mode

* Pengguna dapat mengubah tampilan website menjadi mode gelap atau terang.
* Preferensi tema disimpan menggunakan **localStorage** sehingga tetap tersimpan saat halaman di-refresh.

---

### 2. Booking Layanan

* Pengguna dapat melakukan booking layanan salon melalui tombol **Pesan**.
* Setiap layanan memiliki jumlah slot (stok) yang akan berkurang setiap kali dilakukan booking.
* Jika slot habis:

  * Tombol akan berubah menjadi **“Penuh”**
  * Tidak bisa diklik lagi

---

###  3. Wishlist (Layanan Favorit)

* Pengguna dapat menambahkan layanan ke wishlist dengan tombol **Wishlist**.
* Sistem akan:

  * Menampilkan notifikasi jika berhasil ditambahkan
  * Mencegah duplikasi data (tidak bisa menambahkan layanan yang sama dua kali)
* Data wishlist disimpan di **localStorage**

---

### 4. Tampilan Wishlist (Modal)

* Wishlist ditampilkan dalam bentuk **popup modal (Bootstrap)**.
* Berisi daftar layanan yang telah ditambahkan.
* Jika kosong, akan muncul pesan *“Wishlist kosong”*

---

### 5. Hapus Wishlist

* Terdapat tombol **Kosongkan** untuk menghapus seluruh isi wishlist.
* Data akan langsung terhapus dari tampilan dan localStorage.

---

### 6. Form Booking

* Pengguna dapat mengisi form booking:

  * Nama pelanggan
  * Nomor HP
  * Pilihan layanan
  * Tanggal booking
* Validasi:

  * Semua field wajib diisi
  * Nomor HP harus berupa angka (9–15 digit)
* Setelah berhasil, akan muncul notifikasi booking berhasil.

---

## Teknologi yang Digunakan

* HTML5
* CSS3
* JavaScript (Vanilla JS)
* Bootstrap 5

---

## Penyimpanan Data

* **localStorage**

  * Menyimpan tema (dark/light mode)
  * Menyimpan data wishlist

---

## Tujuan Sistem

Sistem ini dibuat untuk mempermudah pengguna dalam:

* Melihat layanan salon
* Melakukan booking secara cepat
* Menyimpan layanan favorit


