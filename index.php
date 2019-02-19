<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Fashion warehouse project</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
<link rel="stylesheet" href="style/main.scss"/>
<link rel="stylesheet" href="style/main.css"/>
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Roboto+Mono:400,500|Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>
   <script src='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
   <link href='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
 <!-- Navbar Section -->
 <div class="my-nav">
         <nav class="navbar navbar-inverse navbar-fixed-top navbar-transparent mnav affix-top" data-spy="affix" data-offset-top="1" data-offset-bottom="1">
            <div class="container mnav">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header mnav">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  <a class="navbar-brand font-sm" href="#"><i class="fa fa-pied-piper-pp"></i> FWP <i class="fa fa-pied-piper-alt"></i></a> 
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div id="navbar" class="collapse navbar-collapse navbar-right">
                  <ul class="nav navbar-nav navbar-left mnav">
                     <li class="active mnav"><a href="#home">Home</a></li>
                     <li><a href="#about">About</a></li>
                     <li><a href="#service">location</a></li>
                     <li><a href="news.php">News</a></li>
                     <li class="gokil"><a href="buyticket.php">Buy ticket</a></li>
                     <li><a  href="#" data-file="my file 1" class="register">register</a></li>
                    <li><a  href="#" data-file="my file 1" class="rename">Login</a>
                     </li>
                  </ul>
               </div>
               <!-- /.navbar-collapse --> 
            </div>
            <!-- /.container-fluid --> 
         </nav>
      </div>
  <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/1.jpeg');"></div>
                <div class="carousel-caption">
                     <h2 class="animated fadeInLeft">Fashion warehouse</h2>
                     <p class="animated fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                     <p class="animated fadeInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Learn More</a></p>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://www.marchettidesign.net/demo/optimized-bootstrap/conference.jpg');"></div>
                <div class="carousel-caption">
                     <h2 class="animated fadeInDown">Caption Animation</h2>
                     <p class="animated fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                     <p class="animated fadeInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Learn More</a></p>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://www.marchettidesign.net/demo/optimized-bootstrap/campus.jpg');"></div>
                <div class="carousel-caption">
                     <h2 class="animated fadeInRight">Caption Animation</h2>
                     <p class="animated fadeInRight">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                     <p class="animated fadeInRight"><a href="#" class="btn btn-transparent btn-rounded btn-large">Learn More</a></p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>
<div class="container-fluid">
<div class="row">
<div class="vids">
<h1 class="has">Introduce</h1>
    <iframe width="100%" height="500px" style="margin-top:30px;" src="https://www.youtube.com/embed/kUuEJHyxZ3o"></iframe>
</div>
</div>
</div>
<div class="yogs container-fluid">
<div class="row">
<h1 class="event">Event description</h1>
<section class="section fantastis">
<div class="col-md-6 super1 pull-left">
<img class="imago" src="images/1.jpeg">
</div>
<div class="col-md-6 super2 pull-right">
<p class="juniar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna erat, cursus quis rhoncus ac, congue eu diam. Suspendisse varius velit tempor tortor laoreet, a pharetra nisl tincidunt. Curabitur mi nunc, sodales sed commodo et, semper et augue. Mauris facilisis congue tempus. Duis lacinia vulputate ipsum scelerisque vulputate. Aliquam erat volutpat. Integer eu congue ex. Suspendisse porttitor augue vitae vestibulum imperdiet. Donec sed mollis erat, nec suscipit tortor. Duis erat quam, feugiat in sollicitudin dictum, mattis non dolor. Sed vel convallis nisi, a maximus nisi. Morbi ut lectus ligula. Nulla vel euismod eros. Mauris faucibus tellus mattis eros elementum, a sollicitudin justo dictum.  Vestibulum venenatis libero vel ipsum iaculis tincidunt. Cras feugiat ex velit, at pharetra velit varius quis. Nullam tempus, justo quis euismod luctus, eros neque sollicitudin purus, sit amet fermentum turpis dui quis enim. Ut id auctor augue, hendrerit vestibulum mi. Proin tincidunt sagittis dapibus. Nunc blandit, nunc eget consequat ultricies, neque felis hendrerit diam, ac porta urna elit quis enim. Praesent et faucibus metus.</p>
</div>
</section>
</div>
</div>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-15">
            <h1 class="imago-gallery">Image Gallery</h1>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                <img class="image" src="http://www.bigart.design/images/other/stephanie-mccabe-24620-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/_Ajm-ewEC24" target="_blank">
                <div class="text">
                    <p class="title">Firework</p>
        
        
                    <div class="divider">
                    </div>
        
        
                    <p class="sub-title">Stefanie McCabe</p>
                </div></a>
            </div>
        
        
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                <img class="image" src="http://www.bigart.design/images/other/sticker-mule-197248-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/qNhstTawQrI" target="_blank">
                <div class="text">
                    <p class="title">Catch of the day</p>
        
        
                    <div class="divider">
                    </div>
        
        
                    <p class="sub-title">Sticker Mule</p>
                </div></a>
            </div>
        
        
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                <img class="image" src="http://www.bigart.design/images/other/scott-webb-258983-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/fMUIVein7Ng" target="_blank">
                <div class="text">
                    <p class="title">Abstracting Details</p>
        
        
                    <div class="divider">
                    </div>
        
        
                    <p class="sub-title">Scott Web</p>
                </div></a>
            </div>
        
        
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                <img class="image" src="http://www.bigart.design/images/other/matthew-kane-205235-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/9GHW302mRBk" target="_blank">
                <div class="text">
                    <p class="title">Snow Monkey</p>
        
        
                    <div class="divider">
                    </div>
        
        
                    <p class="sub-title">Matthew Kane</p>
                </div></a>
            </div>
        
        
            <div class="portfolio-container">
                <div class="portfolio-row text-center">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                        <img class="image" src="http://www.bigart.design/images/other/joshua-earle-157231-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/xEh4hvxRKXM" target="_blank">
                        <div class="text">
                            <p class="title">Ice Land</p>
        
        
                            <div class="divider">
                            </div>
        
        
                            <p class="sub-title">Joshua Earle</p>
                        </div></a>
                    </div>
        
        
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                        <img class="image" src="http://www.bigart.design/images/other/joshua-sortino-228788-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/71vAb1FXB6g" target="_blank">
                        <div class="text">
                            <p class="title">Emergence from the Clouds</p>
        
        
                            <div class="divider">
                            </div>
        
        
                            <p class="sub-title">Joshua Sortino</p>
                        </div></a>
                    </div>
        
        
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                        <img class="image" src="http://www.bigart.design/images/other/derick-anies-120213-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/hDJT_ERrB-w" target="_blank">
                        <div class="text">
                            <p class="title">Man</p>
        
        
                            <div class="divider">
                            </div>
        
        
                            <p class="sub-title">Derick Anies</p>
                        </div></a>
                    </div>
        
        
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                        <img class="image" src="http://www.bigart.design/images/other/joshua-newton-275881-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/7qjqQjt7zXQ" target="_blank">
                        <div class="text">
                            <p class="title">Flame</p>
        
        
                            <div class="divider">
                            </div>
        
        
                            <p class="sub-title">Joshua Newton</p>
                        </div></a>
                    </div>
                </div>
            </div>
            <div class="row">
        <div class="container-fluid">
    <h1 class="location">Location event</h1>
    <div id="mapid"></div>
    </div>
    </div>
    <footer class="footer">
    <div class="container-fluid foot">
    <div class="row">
    <div class="col-md-5">
        <p class="copyright">Copyright 2018 @Fashion warehouse project design be fgrst<p>
            </div>
    </div>
    </div>
    </footer>
    <?php require("modal/modal_login.php"); ?>
    <?php require("modal_register.php"); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="style/js/main.js"></script>
<script type="text/javascript">
	var mymap = L.map('mapid').setView([-6.28135,106.72463], 14);
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
maxZoom: 18,
id: 'mapbox.streets',
accessToken: 'pk.eyJ1IjoiZGlkaW5ubnVyeWFoeWEiLCJhIjoiY2puYWVzNWE0MTlycTNrb2UwM2k3ZnR2aCJ9.WvJQMfEjJ_4p-YiF4b6_Wg'
}).addTo(mymap);

var arr_marker= [
	[-6.28135,106.72463],
	];
		
		
		for (m of arr_marker) {
		   L.marker(m).addTo(mymap)
					.bindPopup('Your location')
					.openPopup();
		}

	// var marker = L.marker([-6.28135, 106.72463]).addTo(mymap);

	// var circle = L.circle([-6.28135, 106.72463], {
	// 	color: 'red',
	// 	fillColor: '#f03',
	// 	fillOpacity: 0.5,
	// 	radius: 200
	// 	}).addTo(mymap);

	// // var polygon = L.polygon([
	// // 	[51.509, -0.08],
	// // 	[51.503, -0.06],
	// // 	[51.51, -0.047]
	// // 	]).addTo(mymap);

	// marker.bindPopup("<b>SMK BRUTAL INFORMATIKA</b><br>It's my hell").openPopup();
	// circle.bindPopup("SEKOLAH GERSANG TANDUS");
	// // polygon.bindPopup("Ini sebuah polygon.");

	// // var popup = L.popup()
	// // .setLatLng([-5.134389,119.490796])
	// // .setContent("Ini Cuy.")
	// // .openOn(mymap);

	// var popup = L.popup();
	// function onMapClick(e) {
	// popup
	// .setLatLng(e.latlng)
	// .setContent("Lokasi yang dipilih: " + e.latlng.toString())
	// .openOn(mymap);
	// }
	// mymap.on('click', onMapClick);
</script> 
</body>
</html>