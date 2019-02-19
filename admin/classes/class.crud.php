<?php

class crud
{
 private $db;
 
 function __construct($DB_con)
 {
  $this->db = $DB_con;
 }
 
 public function create($image,$judul,$deskripsi,$isi)
 {
  try
  {
   $stmt = $this->db->prepare("INSERT INTO news(path_image,judul,deskripsi,isi) VALUES(:image, :judul, :deskripsi, :isi)");
   $stmt->bindparam(":image",$image);
   $stmt->bindparam(":judul",$judul);
   $stmt->bindparam(":deskripsi",$deskripsi);
   $stmt->bindparam(":isi",$isi);
   $stmt->execute();
   return true;
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
  
 }
 
 public function getID($id)
 {
  $stmt = $this->db->prepare("SELECT * FROM news WHERE postid=:id");
  $stmt->execute(array(":id"=>$id));
  $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }
 
 public function update($id_news,$image,$judul,$deskripsi,$isi)
 {
  try
  {
   $stmt = $this->db->prepare("UPDATE news SET image=:image, judul=:judul, deskripsi=:deskripsi, isi=:isi WHERE id_news=:id_news");
   $stmt->bindparam(":image",$image);
   $stmt->bindparam(":judul",$judul);
   $stmt->bindparam(":deskripsi",$deskripsi);
   $stmt->bindparam(":isi",$isi);
   $stmt->bindparam(":id_news",$id_news);
   $stmt->execute();
   return true;
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
  
 }
 
 public function delete($id_news)
 {
  $stmt = $this->db->prepare("DELETE FROM news WHERE id_news=:id_news");
  $stmt->bindparam(":id_news",$id_news);
  $stmt->execute();
  return true;
 }
 
 /* paging */
 
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
                <td><?php print($row['id_news']); ?></td>
                <td><?php print($row['judul']); ?></td>
                <td><?php print($row['deskripsi']); ?></td>
                <td><?php print($row['isi']); ?></td>
                <td align="center">
                <a href="delete-post.php?id_news=<?php print($row['id_news']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                <a href="edit_post?id_news=<?php print($row['id_news']); ?>"><i class="glyphicon glyphicon-plus"></i></a>
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
 
 /* paging */
 
}