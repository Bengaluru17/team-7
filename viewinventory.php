<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "reachinghands";$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from inventory";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Inventory</title>
 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/shop.style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-v5.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v4.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">

	<!-- CSS Page Styles -->
	<link rel="stylesheet" href="assets/css/pages/log-reg-v3.css">

	<!-- Style Switcher -->
	<link rel="stylesheet" href="assets/css/plugins/style-switcher.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <div class="container">
		<h2>Inventory</h2>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
          <div class="row">
				
              <div class="col-xs-2">ID</div>
			  <div class="col-xs-10"><?php echo $row[0]; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">Commodity</div>
              <div class="col-xs-10"><?php echo $row[1]; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">Type</div>
              <div class="col-xs-10"><?php echo $row[2]; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">Quantity</div>
              <div class="col-xs-10"><?php echo $row[3]; ?></div>
          </div>

          <hr/>
        <?php } ?>
    </div>
</body>
</html>