
<?php

require_once('connection.php');
parse_str(file_get_contents('php://input'), $value);

$kode_item =$value['kode_item'];
$barang = $value['barang'];
$barcode = $value['barcode'];
$idsatuan = $value['idsatuan'];
$jenis = $value['jenis'];
$hargaumum = $value['hargaumum'];
$hargagrosir = $value['hargagrosir'];
$id = $value['id'];
$qty = $value['qty'];


$query = "UPDATE barang set barang='$barang',barcode='$barcode',idsatuan='$idsatuan', jenis='$jenis',hargaumum='$hargaumum',hargagrosir='$hargagrosir',id='$id',qty='$qty' WHERE kode_item='$kode_item' ";
$sql = mysqli_query($db_connect, $query);

if ($sql) {

    echo json_encode(array('message' => 'BERHASIL DIUUPDATE BRO!'));
} else {
    echo json_encode(array('message' => 'gagal!'));
}
?>