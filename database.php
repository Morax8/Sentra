<?php
$conn = mysqli_connect("localhost", "root", "", "sentra");

$result = mysqli_query($conn, "Select * From data_pegawai");

$sentra = mysqli_fetch_assoc($result);

while ($data_pegawai = mysqli_fetch_assoc($result)) {
    var_dump($data_pegawai);
};
?>
//membuat file dengan php