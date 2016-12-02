<script>
	$(document).ready(function () {
		$('#popover').popover({
			content: 'Popover content',
			trigger: 'manual'
		});
	});
</script>

<div class="well">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form>
				<button data-toggle="popover" title="" data-container="body" style="width:100%;font-size:2.5vmax;"
						class="popup btn-lg withripple btn btn-raised btn-info"
						data-content="<?= lang( 'resident_button_test_help' ) ?>" 
						formaction="<?= base_url() . 'index.php/resident/categories' ?>">
								<?= lang( 'resident_button_test' ) ?>
				</button>
			</form>
		</div>
	</div>
	<canvas data-toggle="popover" title="" data-container="body" data-content="<?= lang( 'resident_puzzle_help' ) ?>" class="center-block img-responsive" id="puzzle" style="height: 35vw;width:auto"></canvas>
	<script> loadPuzzle("<?= base_url() ?>");</script>
</div>

<?php if ($display_login_notification == true) { ?>
	<script type="text/javascript">
		$(document).ready(function () {
			$.snackbar({content: '<?= lang( 'resident_welcome_snackbar' ) ?>' });
		});
	</script>
<?php } ?>
