<?php
require 'koneksi.php';
$data_pegawai = query("Select * From data_pegawai");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1," />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="fonts/icomoon/style.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css" />
  <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/brands.css" />
  <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/fontawesome.css" />
  <!--Sweetalert2 -->
  <script src="dist/sweetalert2.js"></script>
  <link rel="stylesheet" href="dist/sweetalert2.css" />
  <script>
    function logout() {
      event.preventDefault(); // prevent the default anchor behavior
      Swal.fire({
        icon: 'warning',
        type: "warning",
        title: "Log Out?",
        showCancelButton: true,
        confirmButtonText: "Log Out",
      }).then((result) => {
        location.href = "table.php";
      });
    }
  </script>


  <title>Table #6</title>
</head>

<body>
  <div class="topnav">
    <a class="active" href="table.php" onclick="logout()"><img src="./image/Starcorps logo/logofix.png"></a>
    <div class="search">
      <div class="dropbtn">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        Log Out
        <i class="fa-solid fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="table.php" onclick="logout()">Log Out</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        About
        <i class="fa-solid fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <p align="center" style="color: white">
          Starcorps is a tech company that works for making a better future,
          We can do anything about tech, but we focusing at new technology about EV,
          such as Electric Planes, Helicopter, Boats, Ships, Cars, Bike ,etc
        </p>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        Contact
        <i class="fa-solid fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="https://www.instagram.com/zian___z">instagram</a>
        <a href="https://twitter.com/zian__z?t=ZBnouTC5k9HndHtXIAeaPQ&s=09">Twitter</a>
        <a href="https://web.facebook.com/adityazianurrahman/">Facebook</a>
        <a href="mailto:adityazianurrahman@gmail.com" title="E-mail">E-mail</a>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="content">
      <div class="container">
        <h2>Starcorps Employee Data</h2>
        <div class="table-responsive">
          <table id="myTable" class="table table-striped custom-table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Occupation</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($data_pegawai as $dp) : ?>
                <tr scope="row">
                  <td><?= $dp["ID"]; ?></td>
                  <td><?= $dp["Nama"]; ?></td>
                  <td>
                    <?= $dp["Jabatan"]; ?>
                    <small class="d-block">Far far away, behind the word mountains</small>
                  </td>
                  <td>
                    <a href='detail.php?id=<?php echo $dp["ID"]; ?>' class="more">Details</a>
                  </td>
                  <td>
                    <button onclick="btncncl('<?= $dp["ID"]; ?>')" class="more">Delete</button>
                  </td>
                  <td>
                    <button onclick="location.href='edit.php?id=<?= $dp["ID"]; ?>'" class="more">Edit</button>
                  </td>
                </tr>

              <?php endforeach; ?>
              <tr>
                <td colspan="11" align="center">
                  <a href="tambah.php" class="more"><span class="text">ADD</span></a>
                </td>
              </tr>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="JavaScript/main.js"></script>
</body>

</html>