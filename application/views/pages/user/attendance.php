
      <div class="content">
        <div class="row">
                               <!--Empty   -->
        </div>
     
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">AMS - Login</h5>
                <p class="card-category">Select your shift then click login</p>
                    
  
             <?php  echo "Today is  " . date("m/d/Y"); ?>
              </div>
              <div class="card-body ">
              <?php echo form_open('index.php/attendance/employee_loggedin'); ?>
              <div class="dropdown">
              <select class="btn btn-default" value="" name="select_shift">
                      <option  selected="" disabled="">--Select your Shift--</option>
                      <option value="6AM to 2PM">6AM to 2PM</option>
                      <option value="2PM to 9PM">2PM to 9PM</option>
                                       </select>
             
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
                      <th>Status</th>                                                
                    </thead>
                    <tbody>
                  
                      <tr>
                        <td>Arjay</td>                  
                        <td>12/5/2019 5AM</td>
                        <td>Morning Shift</td>                                                    
                        <td>Trainee</td>        
                      </tr>
                                         
                      <tr>
                        <td>No Data Found</td>
                      </tr>
                  
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
     
      