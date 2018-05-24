<?php

$connection = mysqli_connect("localhost", "root", "", "pesanlom");

function query($query) 
{
    global $connection;
    $result = mysqli_query($connection, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $connection;
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    
    $insert = "INSERT INTO barang 
                VALUES
            ('', '$nama_barang', '$harga', '$stok')";
    mysqli_query($connection, $insert);
    
    return mysqli_affected_rows($connection);
}

function hapus($id) {
    global $connection;
    mysqli_query($connection, "DELETE FROM barang WHERE id_barang = $id");
    
    return mysqli_affected_rows($connection);
}
function ubah($data) {
    global $connection;
    
    $id = $data["id_barang"];
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    
    $insert = "UPDATE barang SET 
                nama_barang = '$nama_barang',
                harga = $harga,
                stok = $stok   
                WHERE id_barang = $id
            ";
    
    mysqli_query($connection, $insert);
    
    return mysqli_affected_rows($connection);
    
}

?>
