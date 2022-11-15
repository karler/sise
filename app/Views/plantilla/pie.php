<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2022 José Luis P.Z. - <a href="https://bv.lasalleurubamba.edu.pe">BV La Salle</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url()."/public/" ?>js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()."/public/" ?>js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url()."/public/" ?>js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()."/public/" ?>js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()."/public/" ?>js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()."/public/" ?>js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url()."/public/" ?>js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()."/public/" ?>js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()."/public/" ?>js/jszip.min.js"></script>
<script src="<?= base_url()."/public/" ?>js/pdfmake.min.js"></script>
<script src="<?= base_url()."/public/" ?>js/vfs_fonts.js"></script>
<script src="<?= base_url()."/public/" ?>js/buttons.html5.min.js"></script>
<script src="<?= base_url()."/public/" ?>js/buttons.print.min.js"></script>
<script src="<?= base_url()."/public/" ?>js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()."/public/" ?>js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()."/public/" ?>js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
