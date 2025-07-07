<?php
function hitungTotalHarga($jumlah, $kategori) {
    $harga = ($kategori == 'dewasa') ? 50000 : 25000;
    return $jumlah * $harga;
}
?>
