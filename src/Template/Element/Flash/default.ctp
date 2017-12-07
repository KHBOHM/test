<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-info alert-dismissible fade show" role="alert">
	<?= $message ?>
	<button type="button" class="close" data-dismiss="alert" aria-label="<?= __('Close')?>">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
