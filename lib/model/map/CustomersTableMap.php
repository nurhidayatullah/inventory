<?php



/**
 * This class defines the structure of the 'customers' table.
 *
 *
 * This class was autogenerated by Propel 1.7.0 on:
 *
 * 07/21/15 02:00:07
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class CustomersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.CustomersTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('customers');
        $this->setPhpName('Customers');
        $this->setClassname('Customers');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('nama_cust', 'NamaCust', 'VARCHAR', true, 100, null);
        $this->addColumn('alamat', 'Alamat', 'VARCHAR', true, 100, null);
        $this->addForeignKey('id_kota', 'IdKota', 'INTEGER', 'kota', 'id', false, null, null);
        $this->addColumn('telp', 'Telp', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Kota', 'Kota', RelationMap::MANY_TO_ONE, array('id_kota' => 'id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Transaksi', 'Transaksi', RelationMap::ONE_TO_MANY, array('id' => 'id_customers', ), 'CASCADE', 'CASCADE', 'Transaksis');
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
            'symfony' =>  array (
  'form' => 'true',
  'filter' => 'true',
),
            'symfony_behaviors' =>  array (
),
        );
    } // getBehaviors()

} // CustomersTableMap
