
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SIPMB 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('index.php/Login/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('template_admin/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('template_admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('template_admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('template_admin/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>

<script>
    $(document).ready(function() {

        //request data kabupaten
        $('#provinsi').change(function() {
            var provinsi_id = $('#provinsi').val(); //ambil value id dari provinsi

            if (provinsi_id != '') {
                $.ajax({
                    url: '<?= base_url(); ?>index.php/daftar/get_kabupaten',
                    method: 'POST',
                    data: {
                        provinsi_id: provinsi_id
                    },
                    success: function(data) {
                        $('#kabupaten').html(data)
                    }
                });
            }
        });

        //request data kecamatan
        $('#kabupaten').change(function() {
            var kabupaten_id = $('#kabupaten').val(); // ambil value id dari kabupaten
            if (kabupaten_id != '') {
                $.ajax({
                    url: '<?= base_url(); ?>/index.php/daftar/get_kecamatan',
                    method: 'POST',
                    data: {
                        kabupaten_id: kabupaten_id
                    },
                    success: function(data) {
                        $('#kecamatan').html(data)
                    }
                });
            }
        });

        //request data desa
        $('#kecamatan').change(function() {
            var kecamatan_id = $('#kecamatan').val(); // ambil value id dari kecamatan
            if (kecamatan_id != '') {
                $.ajax({
                    url: '<?= base_url(); ?>index.php/daftar/get_desa',
                    method: 'POST',
                    data: {
                        kecamatan_id: kecamatan_id
                    },
                    success: function(data) {
                        $('#desa').html(data)
                    }
                });
            }
        });

        //jika tombol kirim di klik
        $('#btnKirim').click(function() {
            var dataprov = $('#provinsi').val();
            var kabupaten = $('#kabupaten').val();
            var kecamatan = $('#kecamatan').val();
            var desa = $('#desa').val();
            $('#dataprov').html(dataprov);
            $('#datakab').html(kabupaten);
            $('#datakec').html(kecamatan);
            $('#datades').html(desa);
        });

    });
</script>

<script>
    function goBack(){
        history.back(-1);
    }

</script>