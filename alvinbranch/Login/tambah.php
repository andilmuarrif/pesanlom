<?php 
//koneksi ke database
require 'functionedit.php';


//cek apakah tombol submit sudah ditekan atau belom
if( isset($_POST["submit"]) ){
   if( tambah($_POST) > 0 ) {
       echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = '../Home/addbarang.php'
            </script>
       ";
   } else {
       echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = '../Home/addbarang.php'
            </script>
       ";
   }
    
   
}
?>
