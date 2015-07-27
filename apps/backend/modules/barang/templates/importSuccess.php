<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
<?php
if((isset($msg))){
?>
<div class="alert alert-danger">
    <?php echo $msg;?>
</div>
<?php
}
 ?>
<form action="<?php echo url_for('barang/importfile') ?>" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<span class="btn btn-success btn-file">
			Browse File <input class="btn" type="file" name="file"/>
		</span>
	</div>
	<input type="submit" class="btn btn-warning" value="Upload File"/>
	<a href='<?php echo url_for('@barang')?>' class='btn btn-default'>Cancel</a>
</form>