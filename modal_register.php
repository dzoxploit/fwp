<?php 
require_once('admin/DBconfig.php');
if(isset($_POST['btn-register'])){
    $fullname = trim($_POST['fullname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = "user";
    
    if($username==""){
        $error[] = "provide username";
    }
    else if($email==""){
        $error[] = "provide email";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error[] = "Please enter a valid email address";
    }
    else if($password==""){
        $error[] = "provide password";
    }
    else if(strlen($password) < 7 ){
        $error[] = "password must be atleast 7 ";
    }
    else{
        try
        {
            $statement = $DB_con->prepare("SELECT username,email FROM users WHERE username=:username OR email=:email");
            $stmt->execute(array(':username'=>$username, ':email'=>$email));
            if($row['username']==$username) {
                $error[] = "sorry username already taken !";
             }
             else if($row['email']==$email) {
                $error[] = "sorry email id already taken !";
             }
             else
             {
                if($user->register($username,$email,$password,$role)) 
                {
                    $user->redirect('index.php?joined');
                }
             }
        }
        catch(PDOException $e)
        {
            echo $e->getmessage();
        }
    }
}
?>
<div class="modal fade" id="modalregister" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: rgb(22, 21, 19)">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:white" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body" style="background: rgb(92, 90, 87)">
      <form method="POST" class="form-horizontal">
       <?php   
       if(isset($error)){
            foreach($error as $error){
                ?>
                <div class="alert alert-danger">
                <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                  </div>
                  <?php  
            }
        }
        else if(isset($_GET['joined']))
        {
             ?>
             <div class="alert alert-info">
                  <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='modal_login.php'>login</a> here
             </div>
             <?php
        }
       ?>
                                 <div class="form-body">
                                        <div class="form-group form-md-line-input">
                                            <div class="col-md-2">    
                                            <label class="col-md-3 control-label" for="form_control_1">Full name</label>
                                            </div> 
                                            <div class="col-md-5">
                                                    <input type="text" name="fullname" class="form-control" placeholder="fullname"/>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                            <div class="col-md-2">    
                                            <label class="col-md-3 control-label" for="form_control_1">Email</label>
                                            </div> 
                                            <div class="col-md-5">
                                                    <input type="text" name="email" class="form-control" placeholder="example@gmail.com"/>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                            <div class="col-md-2">    
                                            <label class="col-md-3 control-label" for="form_control_1">Username</label>
                                            </div> 
                                            <div class="col-md-5">
                                                    <input type="text" name="username" class="form-control" placeholder="username"/>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group form-md-line-input">
                                                <div class="col-md-2">
                                                <label class="col-md-3 control-label" for="form_control_1">Password</label>
                                                </div>
                                                <div class="col-md-5">
                                                <input type="password" name="password" class="form-control" placeholder="********"/>
                                                <div class="form-control-focus"> </div>
                                            </div>
                                            </div>
      </div>
    </div>
    <div class="modal-footer" style="background: rgb(22, 21, 19)">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="btn-register">register</button>
      </div>
  </div>
</div>
</form>