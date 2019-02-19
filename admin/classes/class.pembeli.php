<?php

class pembeli{
    private $db;
    
    function _construct(){
        $this->db = $DB_con;
    }
    public function create($idpembeliticket){
        try
        {
            $stmt = $this->db('INSERT INTO pembeli_ticket(nama_pembeli, alamat, no_telepon, id_ticket, tanggal_pembelian) values(:user_id, :alamat, no_telepon, id_ticket, tanggal_pembelian)');
                $stmt->bindparam('user_id', $user_id);
                $stmt->bindparam('alamat', $alamat);
                $stmt->bindparam('no_telepon', $no_telepon);
                $stmt->bindparam('id_ticket', $id_ticket);
                $stmt->execute();
                return true;
            
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function updateticket(){
        try
        {    
        $stmt = $this->db('UPDATE ticket SET quantity= quantity - 1');
           $stmt->execute();
            return true;
        
    } catch(PDOException $e){
        echo $e->getMessage ;
    }
    }
    public function dataview($query)
    {
     $stmt = $this->db->prepare($query);
     $stmt->execute();
    
     if($stmt->rowCount()>0)
     {
      while($row=$stmt->fetch(PDO::FETCH_ASSOC))
      {
       ?>
                   <tr>
                   <td><?php print($row['id_pembeli']); ?></td>
                   <td><?php print($row['fullname']); ?></td>
                   <td><?php print($row['alamat']); ?></td>
                   <td><?php print($row['no_telepon']); ?></td>
                   <td><?php print($row['id_ticket']); ?></td>
                   <td><?php print($row['tanggal_pembelian']); ?></td>
                   <td align="center">
                   <a href="delete-post.php?delete_id=<?php print($row['postid']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                   </td>
                   </tr>
                   <?php
      }
     }
     else
     {
      ?>
               <tr>
               <td>Nothing here...</td>
               </tr>
               <?php
     }
     
    }
    
    public function paging($query,$records_per_page)
    {
     $starting_position=0;
     if(isset($_GET["page_no"]))
     {
      $starting_position=($_GET["page_no"]-1)*$records_per_page;
     }
     $query2=$query." limit $starting_position,$records_per_page";
     return $query2;
    }
    
    public function paginglink($query,$records_per_page)
    {
     
     $self = $_SERVER['PHP_SELF'];
     
     $stmt = $this->db->prepare($query);
     $stmt->execute();
     
     $total_no_of_records = $stmt->rowCount();
     
     if($total_no_of_records > 0)
     {
      ?><ul class="pagination"><?php
      $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
      $current_page=1;
      if(isset($_GET["page_no"]))
      {
       $current_page=$_GET["page_no"];
      }
      if($current_page!=1)
      {
       $previous =$current_page-1;
       echo "<li><a href='".$self."?page_no=1'>First</a></li>";
       echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
      }
      for($i=1;$i<=$total_no_of_pages;$i++)
      {
       if($i==$current_page)
       {
        echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
       }
       else
       {
        echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
       }
      }
      if($current_page!=$total_no_of_pages)
      {
       $next=$current_page+1;
       echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
       echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
      }
      ?></ul><?php
     }
    }
}
?>