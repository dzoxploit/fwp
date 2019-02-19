<?php
class ticket{

    private $db;

    function  __construct($DB_con){
        $this->db = $DB_con;
    }
    public function create($id_ticket,$nama_pembeli,$no_ktp,$quantity){
        try
        {
        $stmt = $this->db->prepare("INSERT INTO ticket(id_ticket,nama_pembeli,no_ktp,quantity,id_status) values(:id_ticket,:nama_pembeli,:no_ktp,:quantity,:id_ticket)");
        $stmt->bindparam(':id_ticket',$id_ticket);
        $stmt->bindparam(':nama_pembeli',$nama_pembeli);
        $stmt->bindparam(':no_ktp',$no_ktp);
        $stmt->bindparam(':quantity',$quantity);
        $stmt->execute();
        return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function getID($id_ticket){
        $stmt = $this->db->prepare("SELECT * FROM ticket WHERE id_ticket=:id_ticket");
        $stmt->execute(array(":id_ticket" => $id_ticket));
        $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }
    public function update($id_ticket,$namaticket,$deskripsi,$quantity,$image,$status){
        try
        {
        $stmt = $this->db->prepare("UPDATE ticket SET nama_ticket=:namaticket, deksripsi=:deskripsi ,quantity=:quantity, image=:image, status=:status WHERE id_ticket=:id_ticket");
        $stmt->bindparam(':namaticket',$namaticket);
        $stmt->bindparam(':deskripsi',$deskripsi);
        $stmt->bindparam(':quantity',$quantity);
        $stmt->bindparam(':image',$image);
        $stmt->bindparam(':status',$status);
        $stmt->bindparam(':id_ticket',$id_ticket);
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function delete($id_ticket){
        $stmt = $this->db->prepare("DELETE * FROM ticket WHERE id_ticket=:id_ticket");
        $stmt->bindparam("id_ticket", $id_ticket);
        $stmt->execute();
    }
    public function dataview($query){
        $stmt = $this->db->prepare("SELECT * FROM ticket");
        $stmt->execute();

        if($stmt->rowCount()>0){
            while($row->stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
            <tr>
                <td><?php print($row['id_ticket']);?></td>
                <td><img src=<?php print($row['image']);?>></td>
                <td><?php print($row['namaticket']);?></td>
                <td><?php print($row['deskripsi']);?></td>
                <td><?php print($row['quantity']);?></td>
                <td><?php print($row['status']);?></td>
                
            </tr>
                <?php
            }
        } else{
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