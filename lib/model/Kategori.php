<?php


/**
 * Skeleton subclass for representing a row from the 'kategori' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 07/13/15 03:12:17
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Kategori extends BaseKategori {

	function __toString(){
		return $this->getNamaKategori();
	}
} // Kategori
