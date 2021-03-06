<?php


/**
 * Base class that represents a query for the 'supplier' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.7.0 on:
 *
 * 07/21/15 02:00:14
 *
 * @method SupplierQuery orderById($order = Criteria::ASC) Order by the id column
 * @method SupplierQuery orderByNamaSupplier($order = Criteria::ASC) Order by the nama_supplier column
 * @method SupplierQuery orderByAlamat($order = Criteria::ASC) Order by the alamat column
 * @method SupplierQuery orderByIdKota($order = Criteria::ASC) Order by the id_kota column
 * @method SupplierQuery orderByTelp($order = Criteria::ASC) Order by the telp column
 *
 * @method SupplierQuery groupById() Group by the id column
 * @method SupplierQuery groupByNamaSupplier() Group by the nama_supplier column
 * @method SupplierQuery groupByAlamat() Group by the alamat column
 * @method SupplierQuery groupByIdKota() Group by the id_kota column
 * @method SupplierQuery groupByTelp() Group by the telp column
 *
 * @method SupplierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SupplierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SupplierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SupplierQuery leftJoinKota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Kota relation
 * @method SupplierQuery rightJoinKota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Kota relation
 * @method SupplierQuery innerJoinKota($relationAlias = null) Adds a INNER JOIN clause to the query using the Kota relation
 *
 * @method SupplierQuery leftJoinBarangMasuk($relationAlias = null) Adds a LEFT JOIN clause to the query using the BarangMasuk relation
 * @method SupplierQuery rightJoinBarangMasuk($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BarangMasuk relation
 * @method SupplierQuery innerJoinBarangMasuk($relationAlias = null) Adds a INNER JOIN clause to the query using the BarangMasuk relation
 *
 * @method Supplier findOne(PropelPDO $con = null) Return the first Supplier matching the query
 * @method Supplier findOneOrCreate(PropelPDO $con = null) Return the first Supplier matching the query, or a new Supplier object populated from the query conditions when no match is found
 *
 * @method Supplier findOneByNamaSupplier(string $nama_supplier) Return the first Supplier filtered by the nama_supplier column
 * @method Supplier findOneByAlamat(string $alamat) Return the first Supplier filtered by the alamat column
 * @method Supplier findOneByIdKota(int $id_kota) Return the first Supplier filtered by the id_kota column
 * @method Supplier findOneByTelp(string $telp) Return the first Supplier filtered by the telp column
 *
 * @method array findById(int $id) Return Supplier objects filtered by the id column
 * @method array findByNamaSupplier(string $nama_supplier) Return Supplier objects filtered by the nama_supplier column
 * @method array findByAlamat(string $alamat) Return Supplier objects filtered by the alamat column
 * @method array findByIdKota(int $id_kota) Return Supplier objects filtered by the id_kota column
 * @method array findByTelp(string $telp) Return Supplier objects filtered by the telp column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSupplierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSupplierQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'propel';
        }
        if (null === $modelName) {
            $modelName = 'Supplier';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SupplierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SupplierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SupplierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SupplierQuery) {
            return $criteria;
        }
        $query = new SupplierQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Supplier|Supplier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SupplierPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SupplierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Supplier A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Supplier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nama_supplier`, `alamat`, `id_kota`, `telp` FROM `supplier` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Supplier();
            $obj->hydrate($row);
            SupplierPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Supplier|Supplier[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Supplier[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return SupplierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SupplierPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SupplierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SupplierPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SupplierQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(SupplierPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(SupplierPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SupplierPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nama_supplier column
     *
     * Example usage:
     * <code>
     * $query->filterByNamaSupplier('fooValue');   // WHERE nama_supplier = 'fooValue'
     * $query->filterByNamaSupplier('%fooValue%'); // WHERE nama_supplier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $namaSupplier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SupplierQuery The current query, for fluid interface
     */
    public function filterByNamaSupplier($namaSupplier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($namaSupplier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $namaSupplier)) {
                $namaSupplier = str_replace('*', '%', $namaSupplier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SupplierPeer::NAMA_SUPPLIER, $namaSupplier, $comparison);
    }

    /**
     * Filter the query on the alamat column
     *
     * Example usage:
     * <code>
     * $query->filterByAlamat('fooValue');   // WHERE alamat = 'fooValue'
     * $query->filterByAlamat('%fooValue%'); // WHERE alamat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alamat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SupplierQuery The current query, for fluid interface
     */
    public function filterByAlamat($alamat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alamat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alamat)) {
                $alamat = str_replace('*', '%', $alamat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SupplierPeer::ALAMAT, $alamat, $comparison);
    }

    /**
     * Filter the query on the id_kota column
     *
     * Example usage:
     * <code>
     * $query->filterByIdKota(1234); // WHERE id_kota = 1234
     * $query->filterByIdKota(array(12, 34)); // WHERE id_kota IN (12, 34)
     * $query->filterByIdKota(array('min' => 12)); // WHERE id_kota >= 12
     * $query->filterByIdKota(array('max' => 12)); // WHERE id_kota <= 12
     * </code>
     *
     * @see       filterByKota()
     *
     * @param     mixed $idKota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SupplierQuery The current query, for fluid interface
     */
    public function filterByIdKota($idKota = null, $comparison = null)
    {
        if (is_array($idKota)) {
            $useMinMax = false;
            if (isset($idKota['min'])) {
                $this->addUsingAlias(SupplierPeer::ID_KOTA, $idKota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idKota['max'])) {
                $this->addUsingAlias(SupplierPeer::ID_KOTA, $idKota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SupplierPeer::ID_KOTA, $idKota, $comparison);
    }

    /**
     * Filter the query on the telp column
     *
     * Example usage:
     * <code>
     * $query->filterByTelp('fooValue');   // WHERE telp = 'fooValue'
     * $query->filterByTelp('%fooValue%'); // WHERE telp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SupplierQuery The current query, for fluid interface
     */
    public function filterByTelp($telp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telp)) {
                $telp = str_replace('*', '%', $telp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SupplierPeer::TELP, $telp, $comparison);
    }

    /**
     * Filter the query by a related Kota object
     *
     * @param   Kota|PropelObjectCollection $kota The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SupplierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByKota($kota, $comparison = null)
    {
        if ($kota instanceof Kota) {
            return $this
                ->addUsingAlias(SupplierPeer::ID_KOTA, $kota->getId(), $comparison);
        } elseif ($kota instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SupplierPeer::ID_KOTA, $kota->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByKota() only accepts arguments of type Kota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Kota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SupplierQuery The current query, for fluid interface
     */
    public function joinKota($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Kota');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Kota');
        }

        return $this;
    }

    /**
     * Use the Kota relation Kota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   KotaQuery A secondary query class using the current class as primary query
     */
    public function useKotaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinKota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Kota', 'KotaQuery');
    }

    /**
     * Filter the query by a related BarangMasuk object
     *
     * @param   BarangMasuk|PropelObjectCollection $barangMasuk  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SupplierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBarangMasuk($barangMasuk, $comparison = null)
    {
        if ($barangMasuk instanceof BarangMasuk) {
            return $this
                ->addUsingAlias(SupplierPeer::ID, $barangMasuk->getIdSupplier(), $comparison);
        } elseif ($barangMasuk instanceof PropelObjectCollection) {
            return $this
                ->useBarangMasukQuery()
                ->filterByPrimaryKeys($barangMasuk->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBarangMasuk() only accepts arguments of type BarangMasuk or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BarangMasuk relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SupplierQuery The current query, for fluid interface
     */
    public function joinBarangMasuk($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BarangMasuk');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'BarangMasuk');
        }

        return $this;
    }

    /**
     * Use the BarangMasuk relation BarangMasuk object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   BarangMasukQuery A secondary query class using the current class as primary query
     */
    public function useBarangMasukQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBarangMasuk($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BarangMasuk', 'BarangMasukQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Supplier $supplier Object to remove from the list of results
     *
     * @return SupplierQuery The current query, for fluid interface
     */
    public function prune($supplier = null)
    {
        if ($supplier) {
            $this->addUsingAlias(SupplierPeer::ID, $supplier->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
