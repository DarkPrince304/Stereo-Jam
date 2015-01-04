<?php
session_start();
echo '<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>
    <script src="js/start-screen.js"></script>
    <script src="search.js"></script>

    <title>Welcome!</title>

</head>
<body class="metro">
    
    <div class="tile-area tile-area-dark">
        <h1 class="tile-area-title fg-white"><a href="welcome.php">Welcome, '.$_SESSION['name'].'! </a>
</h1>
        <div class="user-id">
            <div class="user-id-image">
                <span class="icon-user no-display1"></span>
                <img src="images/Battlefield_4_Icon.png" class="no-display">
            </div>
            <div class="user-id-name">
                <span class="first-name"><a href="aboutus.php">About Us</a></span>
            </div>
        </div>
	<div class="tile-group"
	<div class="tile-group one">
            <div class="tile-group-title">Search playlist</p></div>
		
            
                <div style="cursor:pointer;border: 2px black solid" class="image-container shadow tile double live" data-role="live-tile" data-effect="slideLeftRight" data-click="Transform" id="bySong">
			<div class="tile-content image">
                    <img src="song.jpg"></img></div>
			<div class="overlay-fluid"><p style="color:white">By Song Name</p></div>
                </div><br>

		            
                <div style="cursor:pointer;border: 2px black solid" class="image-container shadow tile double live" data-role="live-tile" data-effect="slideLeftRight" data-click="Transform" id="byArtist">
			<div class="tile-content image">
                        <img src="katy.jpg"></img></div>
			<div class="tile-content image">
                        <img src="Pitbull.jpg"></img></div>
			<div class="tile-content image">
                        <img src="arijit.jpeg"></img></div>
			<div class="overlay-fluid"><p style="color:white">By Artist Name</p></div>
                </div><br>
            
                <div style="cursor:pointer;border: 2px black solid" class="image-container shadow tile double live" data-role="live-tile" data-effect="slideUpDown" data-click="Transform" id="byAlbum">
			<div class="tile-content image">
                    <img src="desi.jpg"></img></div>
			<div class="tile-content image">
                    <img src="mj.png"></img></div>
			<div class="tile-content image">
                    <img src="isomnia.jpg"></img></div>
			<div class="overlay-fluid"><p style="color:white">By Album Name</p></div>
                </div>
        </div>

		<div class="tile-group two">
            	<div class="tile-group-title">View playlist</div>
            
                <a href="viewplaylist.php"><div class="image-container shadow" style="cursor:pointer;border: 2px black solid" class="tile ">
                    <img src="myplay.jpg">
			<div class="overlay-fluid"><p style="color:white">Displays your playlist!</p></div>
                </div><br></a>
                <div class="image-container shadow" style="cursor:pointer;border: 2px black solid" class="tile" id="viewOther">
                    <img src="otherplay.gif">
			<div class="overlay-fluid"><p style="color:white">Displays others playlist!</p></div>
                </div><br>
        </div> 
		<div class="tile-group three">
            <div class="tile-group-title">Update playlist</div>
		
            
                <div class="image-container shadow" style="cursor:pointer;border: 2px black solid" id="updatesong">
                    <img src="bysong.jpeg">
			<div class="overlay-fluid"><p style="color:white">By Song Name</p></div>
                </div><br>
		<div class="image-container shadow" style="cursor:pointer;border: 2px black solid" class="tile double" id="updateartist">
                    <img src="byartist.jpg">
			<div class="overlay-fluid"><p style="color:white">By Artist Name</p></div>
                </div><br>
		<div class="tile double image-container shadow" data-click="transform" id="updatealbum">
			<div class="tile-content image-set">
                    <img src="musical.jpg">
		    <img src="byartist.jpg">
		    <img src="desi.jpg">
		    <img src="isomnia.jpg">
		    <img src="mj.png">
			</div>
			<div class="overlay-fluid"><p style="color:white">By Album Name</p></div>
                </div>
        </div>
		<div class="tile-group four">
            <div class="tile-group-title">Logout</div>
		
		<div class="image-container shadow" style="cursor:pointer;border:2px black solid" class="tile">
                    <a href="page.php"><img src="logout.png" height="2" width="2"></a>
			<div class="overlay-fluid"><p style="color:white">Logout</p></div>
                </div>

</div>
</div>

    <script src="js/hitua.js"></script>
<script src="http://c.hit.ua/hit?i=98055&g=0&x=3&r=http://metroui.org.ua/dialog.html&u=http://metroui.org.ua/window.html"></script>



</div>
</body>

</html>' ?>
