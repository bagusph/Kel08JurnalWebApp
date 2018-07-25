<div class="modal fade" id="daftarModal" role="dialog">
    <div class="modal-dialog">
<br>
<br>      
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon"></span> DAFTAR </h4>
        </div>
        <div class="modal-body">
          <form role="form" action="<?php echo base_url('Login/proses_signup') ?>" method="post">
            <div class="form-group">
              <label for="usr"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" name="username" class="form-control" id="usr" placeholder="Username?">
            </div>
            <div class="form-group">
              <label for="pwd"><span class="glyphicon"></span> Password</label>
              <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password">
            </div>
              <button type="submit" class="btn btn-block">Daftar 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">      
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
<br>
<br>      
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon"></span> LOGIN </h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('Login/proses_login') ?>" method="post">
            <div class="form-group">
              <label for="usr"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" name="username" class="form-control" id="usr" placeholder="Username?">
            </div>
            <div class="form-group">
              <label for="pwd"><span class="glyphicon"></span> Password</label>
              <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password">
            </div>
              <button type="submit" value="Login" class="btn btn-block">Login 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">      
        </div>
      </div>
    </div>
  </div>