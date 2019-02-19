<?php
include_once 'DBconfig.php';
?>
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
    <style>
      .kenapa{
        margin-top:100px;
    }
    .kenapes{
        margin-top:10px;
    }
    .kocak{
        margin-top:200px;
    }
    </style>
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
                     <li class="active mnav"><a href="listnews.php">news</a></li>
                     <li><a href="list_deskripsi.php">deskripsi</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse --> 
            </div>
            <!-- /.container-fluid --> 
         </nav>
      </div>
      <div class="clearfix"></div>

<div class="container kenapa">
<a href="add-post.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container kenapes">
     <table class='table table-bordered table-responsive'>
     <tr>
     <th>No</th>
     <th>fullname</th>
     <th>username</th>
     <th>email</th>
     <th colspan="2" align="center">delete</th>
     </tr>
     <?php
  $query = "SELECT ticket.nama_pembeli, konfirmasi.tanggal_pembayaran, konfirmasi.bank, konfirmasi.upload_bukti FROM konfirmasi INNER JOIN ticket ON konfirmasi.id_status = ticket.id_status";       
  $records_per_page=3;
  $newquery = $pendaftar->paging($query,$records_per_page);
  $pendaftar->dataview($newquery);
  ?>
    <tr>
        <td colspan="7" align="center">
    <div class="pagination-wrap">
            <?php $pendaftar->paginglink($query,$records_per_page); ?>
         </div>
        </td>
    </tr>
 
</table>      
</div>

<script src="../style/js/bootstrap.min.js"></script>
<script src="../style/js/jquery.min.js"></script>
</body>