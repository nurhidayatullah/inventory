<?php

/**
 * Base class that represents a row from the 'detail_transaksi' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 07/13/15 03:12:17
 *
 * @package    lib.model.om
 */
abstract class BaseDetailTransaksi extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        DetailTransaksiPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the id_transaksi field.
	 * @var        int
	 */
	protected $id_transaksi;

	/**
	 * The value for the id_barang field.
	 * @var        int
	 */
	protected $id_barang;

	/**
	 * The value for the jumlah field.
	 * @var        int
	 */
	protected $jumlah;

	/**
	 * @var        Transaksi
	 */
	protected $aTransaksi;

	/**
	 * @var        Barang
	 */
	protected $aBarang;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	// symfony behavior
	
	const PEER = 'DetailTransaksiPeer';

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [id_transaksi] column value.
	 * 
	 * @return     int
	 */
	public function getIdTransaksi()
	{
		return $this->id_transaksi;
	}

	/**
	 * Get the [id_barang] column value.
	 * 
	 * @return     int
	 */
	public function getIdBarang()
	{
		return $this->id_barang;
	}

	/**
	 * Get the [jumlah] column value.
	 * 
	 * @return     int
	 */
	public function getJumlah()
	{
		return $this->jumlah;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     DetailTransaksi The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = DetailTransaksiPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [id_transaksi] column.
	 * 
	 * @param      int $v new value
	 * @return     DetailTransaksi The current object (for fluent API support)
	 */
	public function setIdTransaksi($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_transaksi !== $v) {
			$this->id_transaksi = $v;
			$this->modifiedColumns[] = DetailTransaksiPeer::ID_TRANSAKSI;
		}

		if ($this->aTransaksi !== null && $this->aTransaksi->getId() !== $v) {
			$this->aTransaksi = null;
		}

		return $this;
	} // setIdTransaksi()

	/**
	 * Set the value of [id_barang] column.
	 * 
	 * @param      int $v new value
	 * @return     DetailTransaksi The current object (for fluent API support)
	 */
	public function setIdBarang($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_barang !== $v) {
			$this->id_barang = $v;
			$this->modifiedColumns[] = DetailTransaksiPeer::ID_BARANG;
		}

		if ($this->aBarang !== null && $this->aBarang->getId() !== $v) {
			$this->aBarang = null;
		}

		return $this;
	} // setIdBarang()

	/**
	 * Set the value of [jumlah] column.
	 * 
	 * @param      int $v new value
	 * @return     DetailTransaksi The current object (for fluent API support)
	 */
	public function setJumlah($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->jumlah !== $v) {
			$this->jumlah = $v;
			$this->modifiedColumns[] = DetailTransaksiPeer::JUMLAH;
		}

		return $this;
	} // setJumlah()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_transaksi = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_barang = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->jumlah = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 4; // 4 = DetailTransaksiPeer::NUM_COLUMNS - DetailTransaksiPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating DetailTransaksi object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aTransaksi !== null && $this->id_transaksi !== $this->aTransaksi->getId()) {
			$this->aTransaksi = null;
		}
		if ($this->aBarang !== null && $this->id_barang !== $this->aBarang->getId()) {
			$this->aBarang = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DetailTransaksiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = DetailTransaksiPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aTransaksi = null;
			$this->aBarang = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DetailTransaksiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseDetailTransaksi:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				DetailTransaksiPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseDetailTransaksi:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$this->setDeleted(true);
				$con->commit();
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DetailTransaksiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseDetailTransaksi:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			    $con->commit();
			
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseDetailTransaksi:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				DetailTransaksiPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aTransaksi !== null) {
				if ($this->aTransaksi->isModified() || $this->aTransaksi->isNew()) {
					$affectedRows += $this->aTransaksi->save($con);
				}
				$this->setTransaksi($this->aTransaksi);
			}

			if ($this->aBarang !== null) {
				if ($this->aBarang->isModified() || $this->aBarang->isNew()) {
					$affectedRows += $this->aBarang->save($con);
				}
				$this->setBarang($this->aBarang);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = DetailTransaksiPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = DetailTransaksiPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += DetailTransaksiPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aTransaksi !== null) {
				if (!$this->aTransaksi->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTransaksi->getValidationFailures());
				}
			}

			if ($this->aBarang !== null) {
				if (!$this->aBarang->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBarang->getValidationFailures());
				}
			}


			if (($retval = DetailTransaksiPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DetailTransaksiPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getIdTransaksi();
				break;
			case 2:
				return $this->getIdBarang();
				break;
			case 3:
				return $this->getJumlah();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = DetailTransaksiPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIdTransaksi(),
			$keys[2] => $this->getIdBarang(),
			$keys[3] => $this->getJumlah(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DetailTransaksiPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setIdTransaksi($value);
				break;
			case 2:
				$this->setIdBarang($value);
				break;
			case 3:
				$this->setJumlah($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DetailTransaksiPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdTransaksi($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdBarang($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setJumlah($arr[$keys[3]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(DetailTransaksiPeer::DATABASE_NAME);

		if ($this->isColumnModified(DetailTransaksiPeer::ID)) $criteria->add(DetailTransaksiPeer::ID, $this->id);
		if ($this->isColumnModified(DetailTransaksiPeer::ID_TRANSAKSI)) $criteria->add(DetailTransaksiPeer::ID_TRANSAKSI, $this->id_transaksi);
		if ($this->isColumnModified(DetailTransaksiPeer::ID_BARANG)) $criteria->add(DetailTransaksiPeer::ID_BARANG, $this->id_barang);
		if ($this->isColumnModified(DetailTransaksiPeer::JUMLAH)) $criteria->add(DetailTransaksiPeer::JUMLAH, $this->jumlah);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DetailTransaksiPeer::DATABASE_NAME);

		$criteria->add(DetailTransaksiPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of DetailTransaksi (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setIdTransaksi($this->id_transaksi);

		$copyObj->setIdBarang($this->id_barang);

		$copyObj->setJumlah($this->jumlah);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     DetailTransaksi Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     DetailTransaksiPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new DetailTransaksiPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Transaksi object.
	 *
	 * @param      Transaksi $v
	 * @return     DetailTransaksi The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setTransaksi(Transaksi $v = null)
	{
		if ($v === null) {
			$this->setIdTransaksi(NULL);
		} else {
			$this->setIdTransaksi($v->getId());
		}

		$this->aTransaksi = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Transaksi object, it will not be re-added.
		if ($v !== null) {
			$v->addDetailTransaksi($this);
		}

		return $this;
	}


	/**
	 * Get the associated Transaksi object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Transaksi The associated Transaksi object.
	 * @throws     PropelException
	 */
	public function getTransaksi(PropelPDO $con = null)
	{
		if ($this->aTransaksi === null && ($this->id_transaksi !== null)) {
			$this->aTransaksi = TransaksiPeer::retrieveByPk($this->id_transaksi);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aTransaksi->addDetailTransaksis($this);
			 */
		}
		return $this->aTransaksi;
	}

	/**
	 * Declares an association between this object and a Barang object.
	 *
	 * @param      Barang $v
	 * @return     DetailTransaksi The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setBarang(Barang $v = null)
	{
		if ($v === null) {
			$this->setIdBarang(NULL);
		} else {
			$this->setIdBarang($v->getId());
		}

		$this->aBarang = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Barang object, it will not be re-added.
		if ($v !== null) {
			$v->addDetailTransaksi($this);
		}

		return $this;
	}


	/**
	 * Get the associated Barang object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Barang The associated Barang object.
	 * @throws     PropelException
	 */
	public function getBarang(PropelPDO $con = null)
	{
		if ($this->aBarang === null && ($this->id_barang !== null)) {
			$this->aBarang = BarangPeer::retrieveByPk($this->id_barang);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aBarang->addDetailTransaksis($this);
			 */
		}
		return $this->aBarang;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->aTransaksi = null;
			$this->aBarang = null;
	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BaseDetailTransaksi:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BaseDetailTransaksi::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BaseDetailTransaksi