<?php


/**
 * This class defines the structure of the 'barang' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 07/13/15 03:12:14
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class BarangTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.BarangTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('barang');
		$this->setPhpName('Barang');
		$this->setClassname('Barang');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('NAMA_BARANG', 'NamaBarang', 'VARCHAR', false, 100, null);
		$this->addForeignKey('ID_KATEGORI', 'IdKategori', 'INTEGER', 'kategori', 'ID', false, 11, null);
		$this->addColumn('STOCK', 'Stock', 'INTEGER', false, 11, null);
		$this->addForeignKey('ID_KEMASAN', 'IdKemasan', 'INTEGER', 'kemasan', 'ID', false, 11, null);
		$this->addForeignKey('ID_PRODUSEN', 'IdProdusen', 'INTEGER', 'produsen', 'ID', false, 11, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addForeignKey('ID_HARGA', 'IdHarga', 'INTEGER', 'harga', 'ID', false, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Kategori', 'Kategori', RelationMap::MANY_TO_ONE, array('id_kategori' => 'id', ), 'CASCADE', 'CASCADE');
    $this->addRelation('Kemasan', 'Kemasan', RelationMap::MANY_TO_ONE, array('id_kemasan' => 'id', ), 'CASCADE', 'CASCADE');
    $this->addRelation('Produsen', 'Produsen', RelationMap::MANY_TO_ONE, array('id_produsen' => 'id', ), 'CASCADE', 'CASCADE');
    $this->addRelation('Harga', 'Harga', RelationMap::MANY_TO_ONE, array('id_harga' => 'id', ), 'CASCADE', 'CASCADE');
    $this->addRelation('DetailBarangMasuk', 'DetailBarangMasuk', RelationMap::ONE_TO_MANY, array('id' => 'id_barang', ), 'CASCADE', 'CASCADE');
    $this->addRelation('DetailTransaksi', 'DetailTransaksi', RelationMap::ONE_TO_MANY, array('id' => 'id_barang', ), 'CASCADE', 'CASCADE');
    $this->addRelation('LinkBarangRak', 'LinkBarangRak', RelationMap::ONE_TO_MANY, array('id' => 'id_barang', ), 'CASCADE', 'CASCADE');
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // BarangTableMap
