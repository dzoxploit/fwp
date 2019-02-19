<?php
class USER
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
 
    public function register($fullname,$uname,$umail,$upass)
    {
       try
       {
           $new_password = password_hash($upass, PASSWORD_DEFAULT);
   
           $stmt = $this->db->prepare("INSERT INTO user(fullname,email,username,password) 
                                                       VALUES(:fullname, :umail, :uname, :upass)");
           $stmt->bindparam(":fullname", $fullname);   
           $stmt->bindparam(":umail", $umail);   
           $stmt->bindparam(":uname", $uname);
           $stmt->bindparam(":upass", $new_password);            
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
 
    public function login($uname,$umail,$upass)
    { try{
        $stmt = $this->db->prepare("SELECT * FROM user WHERE email=:umail LIMIT 1");
        $stmt->execute(array(':umail'=>$umail));
        $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0)
        {
           if(password_verify($upass, $userRow['password']))
           {
              $_SESSION['user_session'] = $userRow['id_user'];
              return true;
           }
           else
           {
              return false;
           }
        }
     }
     catch(PDOException $e)
     {
         echo $e->getMessage();
     }
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
   public function paging($query, $records_per_page){
     $starting_posisition = 0;
     if(isset($_GET['page_no'])){
        $starting_posisition = ($_GET['page_no']-1);
     }  
     $query2 = $query." limit $starting_posisition,$records_per_page";
   }
   public function paginglink($query,$records_per_page){
       $self = $_SERVER['PHP_SELF'];
       $stmt = $this->db->prepare($query);
       $stmt->execute();
       $total_record = $stmt->rowCount();

       if($total_record > 0){
           ?>
            <ul class="pagination">
           <?php
           $total_page = ceil($total_record/$records_per_page);
           $currentpage = 1;
           if($currentpage = isset($_GET['page_no'])){
            $currentpage = $_GET['page_no'];
           }
           if($currentpage != 1){
               $previous = $currentpage - 1;
               echo"<li><a href='".$self."'?page_no='1'>First</a></li>";
               echo"<li><a href='".$self."'?page_no='".$previous."'>".$previous."</a></li>";
           }
           for($i=1;$i<=$totalpage;$i++){
               if($i == $currentpage){
                echo"<li><a href='".$self."'?page_no='".$i."' style='color:red'>".$i."</a></li>";
               }
               else{
                echo"<li><a href='".$self."'?page_no='".$previous."'>".$i."</a></li>";
               }
           }
           if($currentpage != $total_page){
               $next = $currentpage+1;
               echo"<li><a href='".$self."'?page_no='".$next."'>next</a></li>";
               echo"<li><a href='".$self."'?page_no='".$total_page."'>last</a></li>";
           }
           ?></ul><?php
       }
   }
}
?>