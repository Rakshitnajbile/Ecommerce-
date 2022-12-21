 <link href="../css/style.css" rel="stylesheet">
 <!-- Modal -->
  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
            
              <button type="button" class="close" style="color:black" data-dismiss="modal">&times;</button>
          <h4 style="color:black" style="text-align: left" class="color"> Login</h4>
        </div>
          <div class="modal-body" style="margin-bottom:15px">
            <p>Don't have an account?<a href="signup.php"> Register</a></p>
          <form role="form" action="login_submit.php" method="POST">
              
            <div class="form-group">
             
              <input type="email" class="form-control"  name="e-mail" placeholder="Email" required>
            </div>
            <div class="form-group">
              
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
                         <button type="submit" class="btn btn-default btn-primary">Login</button><br><br>
               <a href= "#" >Forgot Password?</a>
          </form>
           
        </div>
      </div>
    </div>
  </div> 
    
