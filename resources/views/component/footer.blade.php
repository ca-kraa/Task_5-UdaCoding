<!-- Navbar -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <script src="{{ asset('assets/AdminLTE') }}/plugins/jquery/jquery.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/chart.js/Chart.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/sparklines/sparkline.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/moment/moment.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/summernote/summernote-bs4.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/dist/js/adminlte.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/dist/js/demo.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/dist/js/pages/dashboard.js"></script>
  <script>
    function updateClock() {
      const clockElement = document.getElementById('clock');
      const currentTime = new Date();
      const hours = currentTime.getHours().toString().padStart(2, '0');
      const minutes = currentTime.getMinutes().toString().padStart(2, '0');
      const seconds = currentTime.getSeconds().toString().padStart(2, '0');
      const timeString = hours + ':' + minutes + ':' + seconds;
      clockElement.textContent = timeString;
    }
    setInterval(updateClock, 1000);
    updateClock();
  </script>
  <!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('assets/AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables & Plugins -->
  <script src="{{ asset('assets/AdminLTE') }}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/jszip/jszip.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/AdminLTE') }}/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('assets/AdminLTE') }}/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true, "lengthChange": false, "searching": false,
        "ordering": true, "info": true, "autoWidth": false, "responsive": true
      });
    });
  </script>
<script>
  $(document).ready(function() {
    $("[data-widget='pushmenu']").click(function(e) {
      e.preventDefault();
      $("body").toggleClass("sidebar-collapse");
    });
  });
</script>

<script>
    function showEditModal(button) {
        const id = button.getAttribute('data-id');
        const kode = button.getAttribute('data-kode');
        const judul = button.getAttribute('data-judul');
        const penulis = button.getAttribute('data-penulis');
        const penerbit = button.getAttribute('data-penerbit');
        const jumlah = button.getAttribute('data-jumlah');

        // Isi nilai-nilai dalam modal edit
        document.getElementById('editForm').action = `/buku/${id}`;
        document.getElementById('edit_kode_buku').value = kode;
        document.getElementById('edit_judul_buku').value = judul;
        document.getElementById('edit_penulis_buku').value = penulis;
        document.getElementById('edit_penerbit_buku').value = penerbit;
        document.getElementById('edit_jumlah_halaman').value = jumlah;
    }
</script>
  </body>
  </html>
