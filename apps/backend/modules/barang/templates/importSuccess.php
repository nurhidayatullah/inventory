<?php echo $msg;?>
<form action="<?php echo url_for('barang/importfile') ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"/>
	<input type="submit" class="btn btn-default"/>
</form>