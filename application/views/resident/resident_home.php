<div class="panel">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form>
                <button data-toggle="popover" title="" data-container="body" style="width:100%;font-size:2.5vmax;"
                        class="popup btn-lg withripple btn btn-raised btn-info"
                        data-content="<?= lang('resident_button_test_help') ?>" 
                        formaction="<?= base_url() . 'index.php/resident/categories' ?>">
                            <?= lang('resident_button_test') ?>
                </button>
            </form>
        </div>
    </div>
    
    <script> loadPuzzle("<?= base_url() ?>");</script>
     <canvas class="center-block img-responsive" id="puzzle" style="height: 32vw;width:content-box"></canvas>
            <script> loadPuzzle( "<?php echo base_url()?>", <?php echo json_encode($nrCompleted); ?>,
             <?php echo json_encode($path); ?> , <?php echo json_encode($puzzle); ?> , <?php echo json_encode($categories); ?>); </script>
</div>

<?php if ($display_login_notification == true) { ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $.snackbar({content: '<?= lang('common_welcome_snackbar') ?>'});
        });
    </script>
<?php } ?>
