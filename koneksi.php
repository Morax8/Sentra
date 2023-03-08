<?php
$conn = mysqli_connect("localhost", "root", "", "sentra");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $data_pegawais = [];
    while ($data_pegawai = mysqli_fetch_assoc($result)) {
        $data_pegawais[] = $data_pegawai;
    }
    return $data_pegawais;
}
?>

<?php
function tambah_data($data_pegawai)
{
    global $conn;

    $ID = $data_pegawai["id"];
    $Nama = $data_pegawai["Nama"];
    $JK = $data_pegawai["JK"];
    $tmplhr = $data_pegawai["tmplhr"];
    $tglhr = $data_pegawai["tglhr"];
    $Alamat = $data_pegawai["Alamat"];
    $Jabatan = $data_pegawai["Jabatan"];
    $MasaKontrak = $data_pegawai["MasaKontrak"];
    $lang1 = $data_pegawai["lang1"];
    $lang_1 = $data_pegawai["lang_1"];
    $lang2 = $data_pegawai["lang2"];
    $lang_2 = $data_pegawai["lang_2"];
    $lang3 = $data_pegawai["lang3"];
    $lang_3 = $data_pegawai["lang_3"];

    $query = "INSERT INTO `data_pegawai`(`ID`, `Nama`, `JK`, `tmplhr`, `tglhr`, `Alamat`, `Jabatan`, `MasaKontrak`, `lang1`, `lang_1`, `lang2`, `lang_2`, `lang3`, `lang_3`) 
        VALUES ('$ID', '$Nama', '$JK', '$tmplhr', '$tglhr', '$Alamat', '$Jabatan', '$MasaKontrak', '$lang1', '$lang_1', '$lang2', '$lang_2', '$lang3', '$lang_3')";

    $query_exe = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if ($query_exe) {
        return true;
    }
    return false;
}
?>

<?php
function hapus_data($ID)
{
    global $conn;

    $query = "delete from data_pegawai where ID='$ID'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>

<?php
function edit_data($data_pegawai)
{
    global $conn;

    var_dump($data_pegawai);

    $ID = $data_pegawai["ID"];
    $Nama = $data_pegawai["Nama"];
    $JK = $data_pegawai["JK"];
    $tmplhr = $data_pegawai["tmplhr"];
    $tglhr = $data_pegawai["tglhr"];
    $Alamat = $data_pegawai["Alamat"];
    $Jabatan = $data_pegawai["Jabatan"];
    $MasaKontrak = $data_pegawai["MasaKontrak"];
    $lang1 = $data_pegawai["lang1"];
    $lang_1 = $data_pegawai["lang_1"];
    $lang2 = $data_pegawai["lang2"];
    $lang_2 = $data_pegawai["lang_2"];
    $lang3 = $data_pegawai["lang3"];
    $lang_3 = $data_pegawai["lang_3"];


    $query = "update data_pegawai set 
                  Nama='$Nama',
                  JK='$JK',
                  tmplhr='$tmplhr',
                  tglhr='$tglhr',
                  Alamat='$Alamat',
                  Jabatan='$Jabatan',
                  MasaKontrak='$MasaKontrak',
                  lang1='$lang1',
                  lang_1='$lang_1',
                  lang2='$lang2',
                  lang_2='$lang_2',
                  lang3='$lang3',
                  lang_3='$lang_3'
                  where ID='$ID'                
                  ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>