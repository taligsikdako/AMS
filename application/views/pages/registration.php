
<div class="container">
<?php if($this->session->flashdata('members_added')) : ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('members_added').'</p>'; ?>
          <?php endif; ?>

          <?php if($this->session->flashdata('user_exist')) : ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_exist').'</p>'; ?>
          <?php endif; ?>
  <h1><?php echo $title; ?></h1>
  <?php echo form_open('index.php/user/members_registration'); ?>


  <div class="form-group row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <label class="col-lg mb-7 mb-sm-0 small">Username</label>
    <input type="text" class="form-control form-control-user" name="username" value="<?php echo set_value('username');?>">
    <span class="text-danger"><?php echo form_error('username'); ?></span>
    </div>

    <div class="col-sm-6 mb-3 mb-sm-0">
    <label class="col-lg mb-7 mb-sm-0 small">Password</label>
    <input type="password" class="form-control form-control-user" name="password" value="<?php echo set_value('password');?>" >
    <span class="text-danger"><?php echo form_error('password'); ?></span>
    </div>              
    </div>

    <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <label class="col-lg mb-7 mb-sm-0 small">First Name</label>
    <input type="text" class="form-control form-control-user" name="firstName" value="<?php echo set_value('firstName');?>">
    <span class="text-danger"><?php echo form_error('firstName'); ?></span>
    </div>

    <div class="col-sm-6 mb-3 mb-sm-0">
    <label class="col-lg mb-7 mb-sm-0 small">Last Name</label>
    <input type="text" class="form-control form-control-user" name="lastName" value="<?php echo set_value('lastName');?>" >
    <span class="text-danger"><?php echo form_error('lastName'); ?></span>
    </div>              
    </div>
  
    <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <label class="col-lg mb-7 mb-sm-0 small">Email</label>
    <input type="email" class="form-control form-control-user" name="Email" value="<?php echo set_value('Email');?>">
    <span class="text-danger"><?php echo form_error('Email'); ?></span>
    </div>

    <div class="col-sm-6 mb-3 mb-sm-0">
    <label class="col-lg mb-7 mb-sm-0 small">Contact Number</label>
    <input type="number" class="form-control form-control-user" name="contactNumber" value="<?php echo set_value('contactNumber');?>" >
    <span class="text-danger"><?php echo form_error('contactNumber'); ?></span>
    </div>              
    </div>

    <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <label class="col-lg mb-7 mb-sm-0 small">Address</label>
    <input type="text" class="form-control form-control-user" name="address" value="<?php echo set_value('address');?>">
    <span class="text-danger"><?php echo form_error('address'); ?></span>
    </div>
               
    </div>

    
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <div class="form-group">
  
  </div>
</div>