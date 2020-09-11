<!DOCTYPE html>
<html>
<head>
	<title>RSIA KIRANA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="/rsiakirana/images/logo.png">
</head>
<body>
 
	<?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<div class='alert'>Username atau Password Salah !</div>";
    }
  }
  ?>

  <div id="card">
    <br>
    <center><a href=""><img src="/rsiakirana/images/logo.png" style="width: 35%; height: 35%;" alt="" />
        <br><strong></strong></a></center>
    <br>
    <div id="card-content">
      <!-- <div id="card-title"> -->
        <!-- <h3>RSUD PROVINSI SULUT</h3> -->
        <!-- <div class="underline-title"></div> -->
      <!-- </div> -->
      <form method="post" class="form" action="/rsiakirana/loginadmin/cek_login.php">
        <label for="username" style="padding-top:13px">
            &nbsp;User Name
          </label>
        <input id="underline-title" class="form-content" type="username" name="username" autocomplete="on" required />
        <div class="underline-title1"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="underline-title" class="form-content" type="password" name="password" required />
        <div class="underline-title1"></div>

        <input id="submit-btn" type="submit" name="submit" value="MASUK"/>

        <input id="submit-btn" type="submit" value="Pendaftaran Pasien" onclick="window.location='/rsiakirana/aksesadmin/manage1/halaman4/formpasien.php';" /> 

      </form>
    </div>
  </div>

</body>

</html>

<style>
  a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, #62adb5, #7beff7);
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#forgot-pass {
  color: red;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: right;
}
#card {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 520px;
  margin: 6rem auto 8.1rem auto;
  width: 400px;
}
#card-content {
  padding: 8px 33px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 2px;
  padding-bottom: 2px;
  text-align: center;
}
#signup {
  color: #62adb5;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #62adb5, #7beff7);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #62adb5;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 1px;
  width: 100%;
}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, #62adb5, #7beff7);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 90px;
}
.underline-title1 {
  background: -webkit-linear-gradient(right, #62adb5, #7beff7);
  height: 2px;
  width: 100%;
  margin-top: 8px;
}
</style>