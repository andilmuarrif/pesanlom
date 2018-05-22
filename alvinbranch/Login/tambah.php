<?php
//koneksi ke database
require 'functionedit.php';


//ambil data dari tabel barang

$queryy = query("SELECT * FROM barang ");


/** proses pengecekan apakah data dari database berhasil ditampilkan atau 
tidak dengan menggunakan tampilan var_dump
while ($data = mysqli_fetch_assoc($query) ) {
*var_dump($data); }
*/

?>
