<?php
include_once 'DBconfig.php';
if($user->is_loggedin()=="")
{
 $user->redirect('index.php');
} else{
    $user->redirect('edit_post.php'); 
}
if(isset($_POST['btn-save']))
{
 $judul = $_POST['judul'];
 $deskripsi = $_POST['deskripsi'];
 $isi = $_POST['isi'];
 $path_image = $_FILES['image']['name'];
 $type=$_FILES['image']['type'];
 $size=$_FILES['image']['size'];
 $temp=$_FILES['image']['tmp_name'];
 $image="images/".$path_image; //set upload folder path
 if(empty($deskripsi)){
     $errorMsg = "please enter name";
 } else if(empty($image)){
     $errorMsg = "please input image";
 }else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif'){
    if(!file_exists($image)){
        if($size < 5000000){
            move_uploaded_file($temp, "upload/".$image_file);
            if($crud->create($image,$judul,$deskripsi,$isi))
            {
             header("Location: add-post.php?inserted");
            }
            else
            {
             header("Location: add-post.php?failure");
            }
        } else{
            $errorMsg="your file to large please upload 5mb size";
        }
    } else{
        $errorMsg="file upload already exist";
    }
 }
 else{
     $errorMsg="Upload jpg,png,jpeg,gif";
 }
}
if(isset($_GET['inserted']))
{
echo'<div class="clearfix"></div>
    <div class="container kocak">
 <div class="alert alert-info">
    <strong>WOW!</strong> Record was inserted successfully <a href="index.php">HOME</a>!
 </div>
 </div>';
}
else if(isset($_GET['failure']))
{
  echo'  <div class="container kocak">
 <div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while inserting record !
 </div>
 </div>';
}
?>
<?php
//getting id from url
$id = $_GET['id_news'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM news WHERE id_news=:id";
$query = $DB_con->prepare($sql);
$query->execute(array(':id' => $id));
 
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $id = $row['id_news'];
    $path_image = $row['path_image'];
    $judul = $row['judul'];
    $deskripsi = $row['deskripsi'];
    $isi = $row['isi'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fashion warehouse project</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
<link rel="stylesheet" href="style/main.scss"/>
<link rel="stylesheet" href="style/main.css"/>
<style>
.navbar{
    background-color: #0a145e;
}
        .navbar{
            background-color: #0a145e;
        }
        .container-fluid .satu{
            background-color: #0a145e;
        }
        .navbar a{
            color: white;
        }
        .navbar .dtu{
            text-align: center;
        }
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
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid satu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="col-md-20">
                <a class="navbar-brand">
                <span class="light">FWP</span>
                </a>
                </div>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php"> Home</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="style/js/main.js"></script>
<div class="container kocak">

  
  <form method='post' enctype="multipart/form-data">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>judul</td>
            <td><input type='text' name='judul' class='form-control' value="<?php echo $judul; ?>"></td>
        </tr>
 
        <tr>
            <td>path image</td>
            <td><input type='file' name='image' class='form-control' value="<?php echo $path_image; ?>"></td>
        </tr>
 
        <tr>
            <td>deskripsi</td>
            <td><textarea type="text" name='deskripsi' class='form-control' value="<?php echo $deskripsi; ?>"></textarea></td>
        </tr>
 
        <tr>
            <td>isi</td>
            <td><input type="text" name="isi" class=" form-control" value="<?php echo $isi; ?>"></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
      <span class="glyphicon glyphicon-plus"></span> Create New Record
   </button>  
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

</body>
