<?php
include './config/crud.php';

// Object init
$obj = new Crud();

// Global variables
$username = $_POST['name'];
$gender = $_POST['gender'];
$indentifyNumb = $_POST['identify-numb'];
$type_room = $_POST['type-room'];
$price = $_POST['price'];
$date = $_POST['date'];
$days = $_POST['days'];
$discount = '10%';
$grand_total = $_POST['grand-total'];

// Form validation rules
if (strlen($indentifyNumb) != 16){
    $newURL = 'pesan_kamar.php?error2= * Isian salah, data harus 16 digit !';
    header('Location:'.$newURL);
}elseif (!is_numeric($days)) {
    $newURL = 'pesan_kamar.php?error3= * Isian salah, harus angka !';
    header('Location:'.$newURL);
}elseif ($grand_total == '') {
    $newURL = 'pesan_kamar.php?error1= * Hitung total bayar dahulu !';
    header('Location:'.$newURL);
}else{
    // store data to DB
    $inputData = $obj->insertData($username, $indentifyNumb, $gender, $type_room, $days, $discount, $grand_total);

    // Check if store data = true, then
    if ($inputData == 1) {
        echo "<script>alert('Pemesanan Kamar Hotel Telah Di Tambahkan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        exit;
    } else {
        echo "<script>alert('Pemesanan Kamar Hotel Gagal Di Tambahkan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        exit;
    }
}
?>