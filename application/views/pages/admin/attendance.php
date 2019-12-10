
      <div class="content">
        <div class="row">
                               <!--Empty   -->
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Attendance Monitoring System</h5>
                <p class="card-category">attendance logs</p>
              </div>
              <div class="card-body ">
                <!-- <canvas id=chartHours width="400" height="100"></canvas> -->
                <div class="table-responsive">
                  <table class="table" id="dataTable">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>TimeIn</th>                     
                      <th>Shift</th>                      
                      <th>Action</th>                  
                    </thead>
                    <tbody>
                    <?php 
                    if($fetchAllEmployeeLogs->num_rows() > 0)
                    {
                        foreach($fetchAllEmployeeLogs->result() as $row)
                        {                       
                    
                    ?>
                      <tr>
                      <td><?php echo $row->username; ?></td>  
                        <td><?php echo $row->time_in; ?></td>
                        <td><?php echo $row->shift; ?></td>                     
                        
                        <td><input type="submit" class="btn btn-primary" type="text" value="Update"></td>                  
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
              <div class="card-footer ">
                <hr>
               
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">AMS - Login</h5>
                <p class="card-category">Select your shift then click login</p>
                <?php if($this->session->flashdata('employee_loggedin')) : ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('employee_loggedin').'</p>'; ?>
          <?php endif; ?>
  
             <?php  echo "Today is  " . date("m/d/Y"); ?>
              </div>
              <div class="card-body ">
              <?php echo form_open('attendance/employee_loggedin'); ?>
              <div class="dropdown">
              <select class="btn btn-default" value="" name="select_shift">
                      <option  selected="" disabled="">--Select your Shift--</option>
                      <option value="6AM to 2PM">6AM to 2PM</option>
                      <option value="2PM to 9PM">2PM to 9PM</option>
                                       </select>
                  <span class="text-danger"><?php echo form_error('select_shift'); ?></span>
                                       </div>
              <button type="submit" class="btn btn-primary" value="Login">Login</button>
              <input type="button" class="btn btn-primary" value="Logout" disabled>
              </form>
              </div>
              <div class="card-footer ">
            
                <hr>
               
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Your Attendance Records</h5>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                <!-- <canvas id="speedChart" width="400" height="100"></canvas> -->
                <div class="table-responsive">
                  <table class="table" id="dataTable">
                    <thead class="text-primary">
                      <th>Name</th>                
                      <th>LoggedIn</th>
                      <th>Shift</th>                                           
                    </thead>
                    <tbody>
                    <?php 
                    if($fetchLoggedinByEmployee->num_rows() > 0)
                    {
                        foreach($fetchLoggedinByEmployee->result() as $row)
                        {                       
                    
                    ?>
                      <tr>
                        <td><?php echo $row->username; ?></td>                  
                        <td><?php echo $row->time_in; ?></td>
                        <td><?php echo $row->shift; ?></td>                                                    
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
              <div class="card-footer">
                <div class="chart-legend">
                  <!-- <i class="fa fa-circle text-info"></i> Tesla Model S
                  <i class="fa fa-circle text-warning"></i> BMW 5 Series -->
                </div>
                <hr/>
                <div class="card-stats">
                  <i class="fa fa-check"></i> Recent Attendance Logs
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     