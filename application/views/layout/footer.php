<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url('assets') ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/typed.js/typed.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets') ?>/js/main.js"></script>

<!-- MODAL -->
<script>
    $(document).ready(function() {
        $("#myModal").modal('show');
    });
</script>
<!-- ENDMODAL -->

<!-- START TABS TABLE -->
<script>
    $('#jadwal a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>
<!-- END TABS TABLE -->
</body>

</html>