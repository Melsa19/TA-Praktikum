document.addEventListener("DOMContentLoaded", function () {

  // =====================
  // DARK MODE
  // =====================
  const btnTheme = document.getElementById("themeToggle");
  const body = document.body;

  if (localStorage.getItem("theme") === "dark") {
    body.classList.add("dark-mode");
    btnTheme.textContent = "Mode Terang";
  }

  btnTheme.addEventListener("click", function () {
    body.classList.toggle("dark-mode");

    if (body.classList.contains("dark-mode")) {
      localStorage.setItem("theme", "dark");
      btnTheme.textContent = "Mode Terang";
    } else {
      localStorage.setItem("theme", "light");
      btnTheme.textContent = "Mode Gelap";
    }
  });

  // =====================
  // BOOKING
  // =====================
  document.querySelectorAll(".btn-pesan").forEach(function (btn) {
    btn.addEventListener("click", function (e) {

      const card = e.target.closest(".service-card");
      const slotElement = card.querySelector(".stock-value");
      const nama = card.getAttribute("data-service-name");

      let slot = parseInt(slotElement.textContent);

      if (slot > 0) {
        slot--;
        slotElement.textContent = slot;
        alert("Booking berhasil: " + nama);
      } else {
        alert("Slot sudah penuh!");
        btn.disabled = true;
        btn.textContent = "Penuh";
      }
    });
  });

  // =======================
// WISHLIST (VERSI MODUL)
// =======================

let wishlist = JSON.parse(sessionStorage.getItem("wishlist")) || [];

// Update jumlah badge
function updateWishlistCount() {
  document.getElementById("wishlistCount").textContent = wishlist.length;
}

// Tambah ke wishlist (ADA VALIDASI)
function tambahKeWishlist(namaLayanan) {
  if (!wishlist.includes(namaLayanan)) {
    wishlist.push(namaLayanan);
    sessionStorage.setItem("wishlist", JSON.stringify(wishlist));
    updateWishlistCount();

    alert(namaLayanan + " berhasil ditambahkan ke Wishlist");
  } else {
    alert(namaLayanan + " sudah ada di Wishlist!");
  }
}

// Tampilkan isi wishlist ke modal
function tampilkanWishlist() {
  const daftar = document.getElementById("wishlistItems");
  daftar.innerHTML = "";

  if (wishlist.length === 0) {
    daftar.innerHTML = '<li class="list-group-item">Wishlist kosong</li>';
  } else {
    wishlist.forEach(function(item) {
      const li = document.createElement("li");
      li.className = "list-group-item";
      li.textContent = item;
      daftar.appendChild(li);
    });
  }
}

// Kosongkan wishlist
function kosongkanWishlist() {
  wishlist = [];
  sessionStorage.removeItem("wishlist");
  updateWishlistCount();
  tampilkanWishlist();
}

// Event tombol wishlist di card
document.querySelectorAll(".btn-wishlist").forEach(function(btn) {
  btn.addEventListener("click", function(e) {

    const card = e.target.closest(".service-card");
    const nama = card.getAttribute("data-service-name");

    tambahKeWishlist(nama);
  });
});

// Event saat modal dibuka
const wishlistModalElement = document.getElementById("wishlistModal");
if (wishlistModalElement) {
  wishlistModalElement.addEventListener("show.bs.modal", tampilkanWishlist);
}

const clearWishlistBtn = document.getElementById("clearWishlist");
if (clearWishlistBtn) {
  clearWishlistBtn.addEventListener("click", kosongkanWishlist);
}

// Init awal
updateWishlistCount();

  // =====================
  // FORM BOOKING
  // =====================
  document.getElementById("bookingForm")
    .addEventListener("submit", function (e) {

      e.preventDefault();

      const nama = document.getElementById("customerName").value.trim();
      const hp = document.getElementById("customerPhone").value.trim();
      const layanan = document.getElementById("serviceSelect").value;
      const tanggal = document.getElementById("bookingDate").value;

      if (!nama || !hp || !tanggal) {
        alert("Isi semua data!");
        return;
      }

      if (!/^[0-9]{9,15}$/.test(hp)) {
        alert("Nomor HP tidak valid!");
        return;
      }

      alert(`Booking berhasil!\n${nama}\n${layanan}\n${tanggal}`);
      this.reset();
    });

  // =====================
  // DISABLE KLIK GAMBAR
  // =====================
  document.querySelectorAll('.service-image').forEach(img => {
    img.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
    });
  });

});