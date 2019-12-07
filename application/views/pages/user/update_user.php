<div class="content">
        <div class="row">
        <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title"><?php echo $header_title; ?></h5>
              </div>
              <div class="card-body">
                <!-- <form> -->
                <!-- Form open -->
                <?php echo form_open('index.php/user/update_user_validation') ?>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                      <?php
                       if(isset($fetch_user))
                      {
                        foreach($fetch_user->result() as $row )
                        {                    
                      ?>
                        <label>Usernamae (disabled)</label>
                        <!-- <input type="text" class="form-control" disabled="" placeholder="Username" value=""> -->
                        <p class="form-control"> <?php echo $row->username;?></p>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Name</label>
                        <!-- <input type="text" class="form-control" placeholder="Name" value="" name="firstName"> -->
                        <p class="form-control"> <?php echo $row->fname." ".$row->lname;?></p>
                        
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <p class="form-control"> <?php echo $row->user_email;?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <p class="form-control"> <?php echo $row->fname;?></p>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <p class="form-control"> <?php echo $row->lname;?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <!-- <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia"> -->
                        <input type="text" class="form-control"  name="address"  value="<?php echo $row->address;?>">
                        <!-- <p class="form-control"> <?php echo $row->address;?></p> -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Roles</label>
                        <input type="text" class="form-control" name="userGroup" value="<?php echo $row->user_group;?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control"  name="userStatus"  value="<?php echo $row->user_status;?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="number" class="form-control" name="contactNumber" value="<?php echo $row->contactNumber;?>">
                      </div>
                    </div>
                 
                    <!-- Div End -->
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                      </div>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                          <input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>">
                      <button type="submit" name="update" value="Update" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                  <?php
                      }
                    }
                  
                  ?>
                </form>
              </div>
            </div>
          </div>
          
        </div>
      </div>