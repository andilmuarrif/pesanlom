<?php
require 'functionedit.php'; 
    $id = $_GET["id_barang"];

if( hapus($id) > 0 ) {
    
    echo "<script>
                alert('data berhasil dihapus!');
                document.location.href = '../Home/addbarang.php';
        </script>
        ";
} else {
        echo "<script>
                alert('data gagal dihapus!');
                document.location.href = '../Home/addbarang.php';
            </script> 
            ";
  } 

?>