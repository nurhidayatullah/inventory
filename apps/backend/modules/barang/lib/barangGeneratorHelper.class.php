<?php

/**
 * barang module helper.
 *
 * @package    symfony
 * @subpackage barang
 * @author     Your name here
 * @version    SVN: $Id: helper.php 12474 2008-10-31 10:41:27Z fabien $
 */
class barangGeneratorHelper extends BaseBarangGeneratorHelper
{
	public function linkToExport($params)
    {
		return "<a href='".url_for('barang/cetak')."' class='btn btn-default'><i class='fa fa-print'></i> <span class='hidden-xs hidden-sm'>Export</span></a>";
    }
}
