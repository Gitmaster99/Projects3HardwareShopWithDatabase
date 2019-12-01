<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bld Home Page</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
                <h1>Bld Developer Page</h1>
                <a href="home.php"><i class="fas fa-home"></i>Home Page</a>
                <a href="home1.php"><i class="fab fa-dyalog"></i>Bld Page</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
            <p>Welcome back, <?=$_SESSION['name']?>!</p>

            <a href="">
            <img class="erd-img" src="images/bld-erd.png" style="width: 100%;">
            </a>

            <p>Bld is a webpage that sells computer components and prebuild computers.<br><br>
            Bld is a fictional webpage that has been build for a school project.<br><br>
            Bld has none of the rights for all information and content on this webpage, all of the rights still are for the companies that own these parts.<br><br>
            These parts are only used for educational purposes and will not be used for making any money or starting any legitimate business.<br><br>
            All rights are reserved for the following companies:</p>
        </div>
        
        <div class="container-fluid">
        <div class="col-sm-12 col-md-12">
           
            <img class="logo-img" src="https://lh3.googleusercontent.com/FJ6ulLD0s4yf03FaI5cyxjdW49TuOTlrtrz32f8MV5U3E_FEI5uyrxMLXJ4ArQ2k-0L7">
            <img class="logo-img" src="https://media.glassdoor.com/sqll/267388/corsair-squarelogo-1441876723177.png">
            <img class="logo-img" src="https://res.cloudinary.com/teepublic/image/private/s--fzpq5_jI--/t_Preview/b_rgb:ffb81c,c_limit,f_jpg,h_630,q_90,w_630/v1492302895/production/designs/1460411_1.jpg">
            <img class="logo-img" src="images/MSI1.jpg">
            <img class="logo-img" src="https://cdn.worldvectorlogo.com/logos/amd-2.svg">
            <img class="logo-img" src="images/boot_logo2.jpg">
            <img class="logo-img" src="https://ih0.redbubble.net/image.292860830.9945/flat,750x1000,075,t.u5.jpg">
            <img class="logo-img" src="https://pbs.twimg.com/profile_images/1005644855723188225/opKm5TQk.jpg">
            <img class="logo-img" src="data:image/jpeg;base64,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">
            </div>
         
        

      </div>
	</body>
</html>