<?php
class konfirmasi{
private $db;

function __construct($DB_con){
    $this->db = $DB_con;
}
public function create($id_status,$id_ticket,$bank,$image,$validasi_admin){
    try
    {
    $stmt = $this->db->prepare("INSERT INTO konfirmasi(id_status,id_ticket,bank,upload_bukti,validasi_admin) values(:id_status,:id_ticket,:bank,:image,:validasi_admin)");
    $stmt->bindparam(':id_status',$id_status);
    $stmt->bindparam(':id_ticket',$id_ticket);
    $stmt->bindparam(':bank',$bank);
    $stmt->bindparam(':image',$image);
    $stmt->bindparam(':validasi_admin',$validasi_admin);
    $stmt->execute();
    return true;
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
}
public function update($id_status){
    try
    {
    $stmt = $this->db->prepare("UPDATE konfirmasi SET validasi_admin=1 WHERE id_status=:id_status ");
    $stmt->bindparam(':id_status',$id_status);
    $stmt->execute();
    return true;
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
}
}
?>
