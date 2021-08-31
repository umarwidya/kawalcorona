 <!-- Main Footer -->
 <footer class="main-footer text-center">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
         
    </div>
    <!-- Default to the left -->
    <strong>Created by <i class="fas fa-heart text-danger"></i><a href="https://instagram.com/umarwidya13">Umar Widyaiswara</a>.</strong> 
  </footer>
</div>

<!-- jQuery -->
<script src="<?php base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php base_url() ?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>