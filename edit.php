<?php
require 'koneksi.php';
$ID = $_GET['id'];

$sentra = query("select * from data_pegawai where id=$ID")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/tamdit.css" />
    <link rel="stylesheet" href="dist/sweetalert2.css">
    <script src="dist/sweetalert2.js"></script>
    <script src="./JavaScript/main.js"></script>
    <title>Edit</title>
</head>

<body>
    <h2 align="center">Edit Employee Data</h2>
    <table border="1" align="center" cellpadding="5" cellspacing="1">
        <form action="" method="post">
            <tr>
                <td colspan="2"><input type="hidden" name="ID" id="ID" required value="<?= $sentra["ID"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="Nama">Name </label></td>
                <td><input type="text" name="Nama" id="Nama" required value="<?= $sentra["Nama"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="Nama">Gender </label></td>
                <td><input type="text" name="JK" id="JK" required value="<?= $sentra["JK"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Birthplace </label></td>
                <td><input type="text" name="tmplhr" id="tmplhr" required value="<?= $sentra["tmplhr"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Birthdate </label></td>
                <td><input type="text" name="tglhr" id="tglhr" required value="<?= $sentra["tglhr"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Address </label></td>
                <td><input type="text" name="Alamat" id="Alamat" required value="<?= $sentra["Alamat"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Position </label></td>
                <td><input type="text" name="Jabatan" id="Jabatan" required value="<?= $sentra["Jabatan"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="alamat">Contract Period </label></td>
                <td><input type="text" name="MasaKontrak" id="MasaKontrak" required value="<?= $sentra["MasaKontrak"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Email </label></td>
                <td><input type="text" name="email" id="email" required value="<?= $sentra["email"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Phone Number </label></td>
                <td><input type="text" name="nohp" id="nohp" required value="<?= $sentra["nohp"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Language 1 </label></td>
                <td><input type="text" name="lang1" id="lang1" value="<?= $sentra["lang1"]; ?>"> <input type="text" name="lang_1" id="lang_1" value="<?= $sentra["lang_1"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Language 2 </label></td>
                <td><input type="text" name="lang2" id="lang2" value="<?= $sentra["lang2"]; ?>"> <input type="text" name="lang_2" id="lang_2" value="<?= $sentra["lang_2"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Language 3 </label></td>
                <td><input type="text" name="lang3" id="lang3" value="<?= $sentra["lang3"]; ?>"> <input type="text" name="lang_3" id="lang_3" value="<?= $sentra["lang_3"]; ?>"></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><button type="submit" name="submit">Edit Data</button></td>
            </tr>
        </form>
    </table>
    <br>
    <br>
    <form action="admin.php" align="center">
        <button type="submit">Back to Admin Page</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        if (edit_data($_POST) > 0) {
    ?>
            <script>
                Swal.fire({
                    title: "Edit Data",
                    text: "Edit Data Succesfull",
                    icon: "success",
                    timer: 1000
                }).then((result) => {
                    location.href = "admin.php";
                });
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    title: "Failed",
                    text: "Failed to Edit Data!",
                    icon: "warning",
                    timer: 1000
                }).then((result) => {
                    location.href = "admin.php";
                });
            </script>
    <?php
        }
    }
    ?>
</body>

</html>