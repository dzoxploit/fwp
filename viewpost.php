<?php require('includes/config.php');
 $stmt = $db->prepare('SELECT postid, posttitle, postcont, postdate FROM blog_posts WHERE postid=:postid');
 
 $stmt->execute(array(':postid' => $_GET['id']));
 $row = $stmt->fetch();
 //jika pos blog tidak sesuai dengan redirect user
 if($row['postid'] == ''){
     header('LOCATION: ./');
     exit;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>JUST ABOUT MY BLOG</title>
<link rel="stylesheet" href="style/css/bootstrap.min.css"/>
<link rel="stylesheet" href="style/main.css"/>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid satu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <a>V</a>
                </button>
                <div class="col-md-20">
                <a class="navbar-brand">
                <span class="light"></>DZIXBLOG</span>
                <h1></></h1>
                </a>
                </div>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#home"> Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <div class="row">
      <!-- membuat panah next dan previous -->
      <div class="container-fluid bagas">
      <section id="features">
      <div class="container-fluid">
                <p><a href="./">Blog index</a></p>
                <?php
                echo'<h3>'.$row['posttitle'].'</h3>';
                echo'<p>Posted on '.date('jS M Y', strtotime($row['postdate'])).'</p>';
                echo'<p>'.$row['postcont'].'</p>';
                ?>
                </div>
                <script src="style/js/bootstrap.min.js"></script>
<script src="style/js/jquery.min.js"></script>
</body>
</html>