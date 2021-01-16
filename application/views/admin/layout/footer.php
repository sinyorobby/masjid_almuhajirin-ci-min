<!-- Required Js -->
<script src="<?= base_url('assets/admin') ?>/js/vendor-all.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/ripple.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/pcoded.min.js"></script>

<!-- datatable Js -->
<script src="<?= base_url('assets/admin') ?>/js/plugins/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/plugins/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/pages/data-responsive-custom.js"></script>

<!-- dropify -->
<script src="<?= base_url('assets/admin') ?>/js/plugins/dropify/js/dropify.min.js"></script>
<script>
    $('.dropify').dropify({
        messages: {
            'default': 'Letakkan Foto dengan format JPEG, JPG, PNG',
            'replace': 'Letakkan Foto dengan format JPEG, JPG, PNG atau klik untuk mengganti',
            'remove': 'Hapus',
            'error': 'Ooops, something wrong appended.'
        },
        error: {
            'fileSize': 'File terlalu besar (1M max).'
        }
    });
</script>
</body>

</html>