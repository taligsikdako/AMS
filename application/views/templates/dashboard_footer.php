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
  
  <script>
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
