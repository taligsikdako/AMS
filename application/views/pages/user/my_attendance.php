<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> <?php echo $body_title; ?></h4>
                <?php if($this->session->flashdata('user_updated')) : ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_updated').'</p>'; ?>
          <?php endif; ?>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                   
                  
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>