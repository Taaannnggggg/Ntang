document.addEventListener("DOMContentLoaded", function () {
  const jumlahInput = document.getElementById("jumlah");
  const kategoriSelect = document.getElementById("kategori");
  const totalHargaSpan = document.getElementById("totalHarga");

  function hitungHarga() {
    const jumlah = parseInt(jumlahInput.value) || 0;
    const kategori = kategoriSelect.value;
    const harga = kategori === "dewasa" ? 50000 : 25000;
    const total = jumlah * harga;
    totalHargaSpan.textContent = "Rp" + total.toLocaleString("id-ID");
  }

  jumlahInput.addEventListener("input", hitungHarga);
  kategoriSelect.addEventListener("change", hitungHarga);
});
