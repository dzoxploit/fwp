<?php
include_once 'DBconfig.php';
if($user->is_loggedin()=="")
{
 $user->redirect('index.php');
} else{
    $user->redirect('listpendaftar.php'); 
}
?>
<?php include_once '../part/header.php'; ?>

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
  $user->dataview($newquery);
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