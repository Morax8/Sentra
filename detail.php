<?php
$id = $_GET['id'];

include('koneksi.php');

$data = query("SELECT * FROM data_pegawai WHERE ID=$id")[0];

?>
<!DOCTYPE html>
<html>
<title>Details</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/detail.css">

<body class="w3-light-grey">
  <div class="topnav">
    <a class="active" href="landingPage.html"><img src="./image/Starcorps logo/logofix.png"></a>
    <div class="dropdown">
      <button class="dropbtn">
        Contact
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="https://www.instagram.com/zian___z">instagram</a>
        <a href="https://twitter.com/zian__z?t=ZBnouTC5k9HndHtXIAeaPQ&s=09">Twitter</a>
        <a href="https://web.facebook.com/adityazianurrahman/">Facebook</a>
        <a href="mailto:adityazianurrahman@gmail.com" title="E-mail">E-mail</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        About
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <p align="center" style="color: white">
          Starcorps is a tech company that works for making a better future,
          We can do anything about tech, but we focusing at new technology about EV,
          such as Electric Planes, Helicopter, Boats, Ships, Cars, Bike ,etc
        </p>
      </div>
    </div>
  </div>

  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

      <!-- Left Column -->
      <div class="w3-third">

        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="./image/<?php echo $data["image"]; ?>" style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-light-grey">
              <h2><?php echo $data['Nama']; ?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $data["Jabatan"]; ?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $data["Alamat"]; ?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $data["email"]; ?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $data["nohp"]; ?></p>
            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
            <p><?php echo $data["skill_1"]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $data["skill1"]; ?>"><?php echo $data["skill1"]; ?></div>
            </div>
            <p><?php echo $data["skill_2"]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $data["skill2"]; ?>">
                <div class="w3-center w3-text-white"><?php echo $data["skill2"]; ?></div>
              </div>
            </div>
            <p><?php echo $data["skill_3"]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $data["skill3"]; ?>"><?php echo $data["skill3"]; ?></div>
            </div>
            <p><?php echo $data["skill_4"]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $data["skill4"]; ?>"><?php echo $data["skill4"]; ?></div>
            </div>
            <br>

            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
            <p><?php echo $data["lang1"]; ?></p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $data["lang_1"]; ?>"></div>
            </div>
            <p><?php echo $data["lang2"]; ?></p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $data["lang_2"]; ?>"></div>
            </div>
            <p><?php echo $data["lang3"]; ?></p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $data["lang_3"]; ?>"></div>
            </div>
            <br>
          </div>
        </div><br>

        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-twothird">

        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $data["Jabatan"]; ?> / Starcorps</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $data["jabatan_1"]; ?> - <span class="w3-tag w3-teal w3-round">Current</span></h6>
            <p><?php echo $data["jabatan_2"]; ?></p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $data["we1"]; ?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $data["we_1"]; ?></h6>
            <p><?php echo $data["we_1_"]; ?></p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $data["we2"]; ?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $data["we_2"]; ?></h6>
            <p><?php echo $data["we_2_"]; ?></p><br>
          </div>
        </div>

        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>

        <!-- End Right Column -->
      </div>

      <!-- End Grid -->
    </div>

    <!-- End Page Container -->
  </div>
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <br>
    <br>
  </footer>
</body>

</html>