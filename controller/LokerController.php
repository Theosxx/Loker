<?php 
if(isset($_POST['simpan'])) {
    $nama = $_POST['namaPT'];
    $email = $_POST['emailPT'];
    $alamat = $_POST['alamatPT'];
    $jenis= $_POST['jenisPT'];

    echo
    'Jenis Loker : ' . $jenis . 
    '<br> Alamat : ' . $alamat .
    '<br> Email : '. $email .
    '<br> nama : ' . $nama; 
}
?>
