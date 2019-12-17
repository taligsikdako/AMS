<!-- Changepassword Modal-->
<div class="modal fade" id="ChangePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">

    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>


      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

    </div>
    <div class="modal-body">
      <!-- <form method="post" id="password_update_form"> -->
        <?php echo form_open("index.php/user/update_password_validation", array("id" => "update-password", "class" => "form-horizontal")) ?>
      <input type="hidden" id="form-type" value="">
      <input type="hidden" name="id" id="id" value="">
      <div class="row">
        <div class="col-sm-6 col-md-12">
              <div id="the-message"></div>
          <div  class="form-group ">
            <div class="col-sm-12">
              <label class="control-label">
              New Password
              </label>
              <input type="password" class="form-control" id="new_password" name="new_password">
              <span class="text-danger"><?php echo form_error('new_password'); ?></span>
            </div>
          </div><!-- /form-group -->
          <div class="form-group ">
            <div class="col-sm-12">
              <label class="control-label">
              Confirm Password
              </label>
              <input type="password" class="form-control" id="confirm_password"  name="confirm_password">
              <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
              </div>
              </div>
            </div>
              </div>

            </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" value="update" data-dismiss="modal">Cancel</button>
      <input type="submit" name="insert" id="insert" value="Update" class="btn btn-primary">
    </div>
      </form>
  </div>
</div>
</div>

<footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="" target="_blank">Alaks</a>
                </li>
                <li>
                  <a href="" target="_blank">Development</a>
                </li>
                <li>
                  <a href="" target="_blank">Licenses</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim </br> Customize with Alaks Development</br>
                
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url(); ?>assets/demo/demo.js"></script>
  <!-- Modal Account creation -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Datatables -->
  <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/datatables/jquery.datatables.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/datatables/datatables.bootstrap4.min.js"></script>
    <!-- Data Tables -->
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/datatables/main.js"></script>
  <!-- Custom Scripts -->
  <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/datatables/datatables-demo.js"></script>
  <!-- Custom JS Files -->
  <!-- <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/custom/custom.js"></script> -->
  
  <script>
// Update password Begin
$('#update-password').submit(function(e) {
    e.preventDefault();
    var me = $(this);
    
    // perform ajax
    $.ajax({
    // url: me.attr('action'),
    url: '<?php echo base_url(); ?>index.php/user/update_password_validation',
    type: 'post',
    data: me.serialize(),
    dataType: 'json',
    success: function(response) {
    if (response.success == true) {
      // if success we would show message
      // and also remove the error class
      $('#the-message').append('<div class="alert alert-success">' +
        '<span class="glyphicon glyphicon-ok"></span>' +
        ' Password has been updated' +
        '</div>');
      $('.form-group').removeClass('has-error')
              .removeClass('has-success');
      $('.text-danger').remove();
    
      // reset the form
      me[0].reset();
    
      // close the message after seconds
      $('.alert-success').delay(500).show(10, function() {
        $(this).delay(3000).hide(10, function() {
          $(this).remove();
    
        });
      })
    }
    
    else {
      $.each(response.messages, function(key, value) {
        var element = $('#' + key);
    
        element.closest('div.form-group')
        .removeClass('has-error')
        .addClass(value.length > 0 ? 'has-error' : 'has-success')
        .find('.text-danger')
        .remove();
        element.after(value);
      });
    }
    }
    });
    });
    // update password end

    $('#btnAddUserModal').click(function()
{
  $('#AddUsersModal').modal('show');
  $('#AddUsersModal').find('.modal-title').text('Create New Account');
  $('#frmNewUser').attr('action','<?php echo base_url()?>user/new_user');
});

    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });

    $('#btnAddUserModal').click(function()
{
  $('#AddUsersModal').modal('show');
  $('#AddUsersModal').find('.modal-title').text('Create New Account');
  $('#frmNewUser').attr('action','<?php echo base_url()?>user/new_user');
});
  </script>
</body>

</html>
