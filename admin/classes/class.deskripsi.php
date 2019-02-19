<?php
class deskripsi{
    private $db;
    
    function __construct($DB_con)
    {
     $this->db = $DB_con;
    }
    public function create($path_image,$desc)
    {
     try
     {
      $stmt = $this->db->prepare("INSERT INTO deskripsi(image,deskripsi) VALUES(:path_image, :deskrip)");
      $stmt->bindparam(":path_image",$path_image);
      $stmt->bindparam(":deskrip",$desc);
      $stmt->execute();
      return true;
     }
     catch(PDOException $e)
     {
      echo $e->getMessage(); 
      return false;
     }
     
    }
    public function getID($id_deskripsi){
        $stmt = $this->db->prepare('SELECT * FROM deskripsi WHERE id_deskripsi=:id_deskripsi');
        $stmt->execute(array(':id'=>$id));
        $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }
    public function update($id_deskripsi,$image,$deskripsi){
        try
        {
        $stmt = $this->db->prepare('UPDATE deskripsi SET image=:image, deskripsi=:deskripsi WHERE id_deskripsi=:id_deskripsi');
        $stmt->bindparam(":image",$image);
        $stmt->bindparam(":deskripsi",$deskripsi);
        $stmt->bindparam(":id_deskripsi",$id_deskripsi);
        $stmt->execute();
        return true;
        
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function dataview($query){
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        if($stmt->rowCount()<0){
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td><img src="<?php print($row['image']);?>"></td>
                    <td><?php print($row['deskripsi']);?></td>
            </tr>
               <?php
            }
        } else{
            ?>
            <tr>
                <td>nothing here</td>
            </tr>
            <?php
        }
    }
}
?>