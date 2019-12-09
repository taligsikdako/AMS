
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
                      <th>Date</th>                  
                      <th>Shift</th>
                      <th>TimeIn</th>
                      <th>Action</th>
                  
                    </thead>
                    <tbody>
                   
                      <tr>
                      <td>Arjay Cobarde</td>  
                        <td>December 9, 2019</td>
                        <td>PM</td>                     
                        <td>2PM</td>
                        <td><input class="btn btn-primary" type="text" value="Update"></td>                  
                      </tr>
                      <tr>
                      <td>Kimoy Balmori</td>  
                        <td>December 10, 2019</td>
                        <td>2PM to 9PM</td>                     
                        <td>2PM</td>                  
                        <td><input class="btn btn-primary" type="text" value="Update"></td>     
                      </tr>
                      <tr>
                      <td>Engelbert Litonjua</td>  
                        <td>December 10, 2019</td>
                        <td>2PM to 9PM</td>                     
                        <td>2PM</td>                  
                        <td><input class="btn btn-primary" type="text" value="Update"></td>     
                      </tr>
                      <tr>
                      <td>Mark Vincent Sarcon</td>  
                        <td>December 10, 2019</td>
                        <td>2PM to 9PM</td>                     
                        <td>2PM</td>                  
                        <td><input class="btn btn-primary" type="text" value="Update"></td>     
                      </tr>
                      <tr>
                      <td>Dantley Kasaysayan</td>  
                        <td>December 10, 2019</td>
                        <td>2PM to 9PM</td>                     
                        <td>2PM</td>                  
                        <td><input class="btn btn-primary" type="text" value="Update"></td>     
                      </tr>
                      <tr>
                      <td>William Genelza</td>  
                        <td>December 10, 2019</td>
                        <td>2PM to 9PM</td>                     
                        <td>2PM</td>                  
                        <td><input class="btn btn-primary" type="text" value="Update"></td>     
                      </tr>
                     
                        <!-- <tr>
                        <td>No Data Found</td>
                      </tr> -->
                  
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
             <?php  echo "Today is  " . date("m/d/Y"); ?>
              </div>
              <div class="card-body ">
              <input type="button" class="btn btn-primary" value="Login">
              </div>
              <div class="card-footer ">
            
                <hr>
               
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Your Attendance Records</h5>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                <!-- <canvas id="speedChart" width="400" height="100"></canvas> -->
                <div class="table-responsive">
                  <table class="table" id="dataTable">
                    <thead class=" text-primary">
                      <th>Date</th>
                      <th>Shift</th>
                      <th>TimeIn</th>
                      <!-- <th>TimeOut</th> -->                                
                      <!-- <th class="text-right">Salary</th> -->
                    </thead>
                    <tbody>
                   
                      <tr>
                        <td>December 9, 2019</td>
                        <td>PM</td>                     
                        <td>2PM</td>                  
                      </tr>
                      <tr>
                        <td>December 10, 2019</td>
                        <td>2PM to 9PM</td>                     
                        <td>2PM</td>                  
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
     