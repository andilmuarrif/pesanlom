<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pesanlom");


//cek apakah tombol submit sudah ditekan atau belom
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen dalam form
    $nama_barang = htmlspecialchars($_POST["nama_barang"]);
    $harga = htmlspecialchars($_POST["harga"]);
    $stok = htmlspecialchars($_POST["stok"]);
    
    //query insert data
    $query = "INSERT INTO barang 
                VALUES('$nama_barang', '$harga', '$stok')";
    mysqli_query($conn, $query);

    //cek apakah data berhasil ditambahkan atau tidak
    if( mysqli_affected_rows($conn) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = '../home/addbarang.php';
            </script>
        ";
    } else {
        echo "<script>
                alert('data gagal ditambahkan!');
                document.location.href = '../home/addbarang.php';
            </script> 
        ";
    } 
    
}
?>
