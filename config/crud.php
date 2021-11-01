<?php
include 'connection.php';

class Crud extends DB
{
    // Insert data 
    public function insertData($username, $indentifyNumb, $gender, $type_room, $days, $discount, $grand_total)
    {  
        $sql = "INSERT INTO pemesanan (nama_pemesan,nomor_identitas,jenis_kelamin,tipe_kamar,durasi_penginapan,discount, total_bayar) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $data = $this->connect->prepare($sql);
        $data->bindParam(1, $username);
        $data->bindParam(2, $indentifyNumb);
        $data->bindParam(3, $gender);
        $data->bindParam(4, $type_room);
        $data->bindParam(5, $days);
        $data->bindParam(6, $discount);
        $data->bindParam(7, $grand_total);
        $data->execute();

        return $data->rowCount();
    }
}
?>