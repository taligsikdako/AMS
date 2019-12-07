<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> <?php echo $header_title; ?></h4>
                <?php if($this->session->flashdata('user_updated')) : ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_updated').'</p>'; ?>
          <?php endif; ?>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Username</th>
                      <th>Name</th>
                      <th>Group</th>
                      <th>Status</th>
                      <th>Joined Date</th>
                      <th>Email</th>
                      <th>Contact Number</th>
                      <th>Address</th>
                      <th>Action</th>
                      <!-- <th class="text-right">Salary</th> -->
                    </thead>
                    <tbody>
                    <?php 
                    if($getAllUsers->num_rows() > 0)
                    {
                        foreach($getAllUsers->result() as $row)
                        {                       
                    
                    ?>
                      <tr>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->fname." ".$row->lname; ?></td>                     
                        <td><?php echo $row->user_group; ?></td>  
                        <td><?php echo $row->user_status; ?></td>  
                        <td><?php echo $row->date_created; ?></td>  
                        <td><?php echo $row->user_email; ?></td>  
                        <td><?php echo $row->contactNumber; ?></td>  
                        <td><?php echo $row->address; ?></td>  
                        <td>
                        <!-- <a type="button" class="btn btn-primary btn-sm" href="">Add New</a> -->
                        <a  type="button" class="btn btn-primary  btn-sm" href="<?php echo base_url();?>index.php/user/update_user/<?php echo $row->id; ?>">Update</a>
                        
                        </td>
                      </tr>
                      <?php
                      }
                    } else {
                      ?>
                        <tr>
                        <td>No Data Found</td>
                      </tr>
                      <?php
                    }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>