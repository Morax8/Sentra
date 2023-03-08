<?php
require 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="stylesheet" href="dist/sweetalert2.css">
    <script src="dist/sweetalert2.js"></script>
    <link rel="stylesheet" href="./css/tamdit.css" />
</head>
<div class="form">

    <body>
        <h2 align="center">Add Employee Data</h2>
        <table border="1" align="center" cellpadding="5" cellspacing="1">
            <form action="" method="post">
                <tr>
                    <td><label for="ID">ID </label></td>
                    <td><input type="text" name="id" id="id" required></td>
                </tr>
                <tr>
                    <td><label for="Nama">Name </label></td>
                    <td><input type="text" name="Nama" id="Nama" required></td>
                </tr>
                <tr>
                    <td><label for="JK">Gender </label></td>
                    <td><input type="text" name="JK" id="JK" required></td>
                </tr>
                <tr>
                    <td><label for="tmplhr">Birthplace </label></td>
                    <td><input type="text" name="tmplhr" id="tmplhr" required></td>
                </tr>
                <tr>
                    <td><label for="tglhr">Birthdate </label></td>
                    <td><input type="text" name="tglhr" id="tglhr" required></td>
                </tr>
                <tr>
                    <td><label for="Alamat">Address </label></td>
                    <td><input type="text" name="Alamat" id="Alamat" required></td>
                </tr>
                <tr>
                    <td><label for="Jabatan">Position </label></td>
                    <td><input type="text" name="Jabatan" id="Jabatan" required></td>
                </tr>
                <tr>
                    <td><label for="MasaKontrak">Contract Period </label></td>
                    <td colspan="3"><input type="text" name="MasaKontrak" id="MasaKontrak" required></td>
                </tr>
                <tr>
                    <td><label for="MasaKontrak">language 1 </label></td>
                    <td><input type="text" name="lang1" id="lang1" required> <input type="text" name="lang_1" id="lang_1" required></td>
                </tr>
                <tr>
                    <td><label for="MasaKontrak">language 2 </label></td>
                    <td><input type="text" name="lang2" id="lang2" required> <input type="text" name="lang_2" id="lang_2" required></td>
                </tr>
                <tr>
                    <td><label for="MasaKontrak">language 3 </label></td>
                    <td><input type="text" name="lang3" id="lang3" required> <input type="text" name="lang_3" id="lang_3" required></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><button type="submit" name="submit">Tambah Data</button></td>
                </tr>
            </form>
        </table>
        <br>
</div>
<form action="admin.php" method="post" align="center">
    <button type="submit" name="submit">Kembali ke halaman Admin</button>
</form>
<?php
if (isset($_POST["submit"])) {

    $q = tambah_data($_POST);
    if ($q) {
?>
        <script>
            Swal.fire({
                title: "Adding Data",
                text: "Adding Data Succesfull",
                icon: "success",
                timer: 1500
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
                text: "Failed to Add Data!",
                icon: "warning",
                timer: 1500
            }).then((result) => {
                location.href = "admin.php";
            });
        </script>
<?php
    }
}
?>
?>
</body>

</html>