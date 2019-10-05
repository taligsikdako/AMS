<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
                            
                  <!-- Flash Message -->
                  <?php if($this->session->flashdata('user_loggedin')) : ?>
                  <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
                  <?php endif; ?>
           <!-- Flash Message -->

            <?php echo form_open('index.php/Site/Login'); ?>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="text" name="tUName" value="<?php echo set_value('tUName'); ?>" class="form-control" placeholder="Username" autofocus >
                <span class="text-danger"><?php echo form_error('tUName'); ?></span>
                <label for="inputEmail">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password"  value="<?php echo set_value('tPassword'); ?>" name="tPassword" class="form-control" placeholder="Password">
                <span class="text-danger"><?php echo form_error('tPassword'); ?></span>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>