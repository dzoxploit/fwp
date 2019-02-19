<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: rgb(22, 21, 19)">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:white" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body" style="background: rgb(92, 90, 87)">
      <form action="javascript:void(0)" method="POST" class="form-horizontal" action="ceklogin.php">
                                        <div class="form-body">
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
        <button type="button" class="btn btn-primary">Login</button>
      </div>
  </div>
</div>
</form>