<?php

 require '../../koneksi/koneksi.php';

if($_GET['id'] == 'konfirmasi')
{
    $data2[] = $_POST['status'];
    $data2[] = $_POST['id_ps'];
    $sql2 = "UPDATE `playstation` SET `status`= ? WHERE id_ps= ?";
    $row2 = $koneksi->prepare($sql2);
    $row2->execute($data2);

    echo '<script>alert("Status PS di pinjam");history.go(-1);</script>'; 
}