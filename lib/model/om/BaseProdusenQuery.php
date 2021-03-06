<?php


/**
 * Base class that represents a query for the 'produsen' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.7.0 on:
 *
 * 07/21/15 02:00:12
 *
 * @method ProdusenQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ProdusenQuery orderByNamaProdusen($order = Criteria::ASC) Order by the nama_produsen column
 * @method ProdusenQuery orderByAlamat($order = Criteria::ASC) Order by the alamat column
 * @method ProdusenQuery orderByIdKota($order = Criteria::ASC) Order by the id_kota column
 * @method ProdusenQuery orderByTelp($order = Criteria::ASC) Order by the telp column
 *
 * @method ProdusenQuery groupById() Group by the id column
 * @method ProdusenQuery groupByNamaProdusen() Group by the nama_produsen column
 * @method ProdusenQuery groupByAlamat() Group by the alamat column
 * @method ProdusenQuery groupByIdKota() Group by the id_kota column
 * @method ProdusenQuery groupByTelp() Group by the telp column
 *
 * @method ProdusenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProdusenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProdusenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProdusenQuery leftJoinKota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Kota relation
 * @method ProdusenQuery rightJoinKota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Kota relation
 * @method ProdusenQuery innerJoinKota($relationAlias = null) Adds a INNER JOIN clause to the query using the Kota relation
 *
 * @method ProdusenQuery leftJoinBarang($relationAlias = null) Adds a LEFT JOIN clause to the query using the Barang relation
 * @method ProdusenQuery rightJoinBarang($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Barang relation
 * @method ProdusenQuery innerJoinBarang($relationAlias = null) Adds a INNER JOIN clause to the query using the Barang relation
 *
 * @method Produsen findOne(PropelPDO $con = null) Return the first Produsen matching the query
 * @method Produsen findOneOrCreate(PropelPDO $con = null) Return the first Produsen matching the query, or a new Produsen object populated from the query conditions when no match is found
 *
 * @method Produsen findOneByNamaProdusen(string $nama_produsen) Return the first Produsen filtered by the nama_produsen column
 * @method Produsen findOneByAlamat(string $alamat) Return the first Produsen filtered by the alamat column
 * @method Produsen findOneByIdKota(int $id_kota) Return the first Produsen filtered by the id_kota column
 * @method Produsen findOneByTelp(string $telp) Return the first Produsen filtered by the telp column
 *
 * @method array findById(int $id) Return Produsen objects filtered by the id column
 * @method array findByNamaProdusen(string $nama_produsen) Return Produsen objects filtered by the nama_produsen column
 * @method array findByAlamat(string $alamat) Return Produsen objects filtered by the alamat column
 * @method array findByIdKota(int $id_kota) Return Produsen objects filtered by the id_kota column
 * @method array findByTelp(string $telp) Return Produsen objects filtered by the telp column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseProdusenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProdusenQuery object.
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
            $modelName = 'Produsen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProdusenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProdusenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProdusenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProdusenQuery) {
            return $criteria;
        }
        $query = new ProdusenQuery(null, null, $modelAlias);

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
     * @return   Produsen|Produsen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProdusenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProdusenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Produsen A model object, or null if the key is not found
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
     * @return                 Produsen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nama_produsen`, `alamat`, `id_kota`, `telp` FROM `produsen` WHERE `id` = :p0';
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
            $obj = new Produsen();
            $obj->hydrate($row);
            ProdusenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Produsen|Produsen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Produsen[]|mixed the list of results, formatted by the current formatter
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
     * @return ProdusenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProdusenPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProdusenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProdusenPeer::ID, $keys, Criteria::IN);
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
     * @return ProdusenQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ProdusenPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ProdusenPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProdusenPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nama_produsen column
     *
     * Example usage:
     * <code>
     * $query->filterByNamaProdusen('fooValue');   // WHERE nama_produsen = 'fooValue'
     * $query->filterByNamaProdusen('%fooValue%'); // WHERE nama_produsen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $namaProdusen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProdusenQuery The current query, for fluid interface
     */
    public function filterByNamaProdusen($namaProdusen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($namaProdusen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $namaProdusen)) {
                $namaProdusen = str_replace('*', '%', $namaProdusen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProdusenPeer::NAMA_PRODUSEN, $namaProdusen, $comparison);
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
     * @return ProdusenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProdusenPeer::ALAMAT, $alamat, $comparison);
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
     * @return ProdusenQuery The current query, for fluid interface
     */
    public function filterByIdKota($idKota = null, $comparison = null)
    {
        if (is_array($idKota)) {
            $useMinMax = false;
            if (isset($idKota['min'])) {
                $this->addUsingAlias(ProdusenPeer::ID_KOTA, $idKota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idKota['max'])) {
                $this->addUsingAlias(ProdusenPeer::ID_KOTA, $idKota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProdusenPeer::ID_KOTA, $idKota, $comparison);
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
     * @return ProdusenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProdusenPeer::TELP, $telp, $comparison);
    }

    /**
     * Filter the query by a related Kota object
     *
     * @param   Kota|PropelObjectCollection $kota The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProdusenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByKota($kota, $comparison = null)
    {
        if ($kota instanceof Kota) {
            return $this
                ->addUsingAlias(ProdusenPeer::ID_KOTA, $kota->getId(), $comparison);
        } elseif ($kota instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProdusenPeer::ID_KOTA, $kota->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return ProdusenQuery The current query, for fluid interface
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
     * Filter the query by a related Barang object
     *
     * @param   Barang|PropelObjectCollection $barang  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProdusenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBarang($barang, $comparison = null)
    {
        if ($barang instanceof Barang) {
            return $this
                ->addUsingAlias(ProdusenPeer::ID, $barang->getIdProdusen(), $comparison);
        } elseif ($barang instanceof PropelObjectCollection) {
            return $this
                ->useBarangQuery()
                ->filterByPrimaryKeys($barang->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBarang() only accepts arguments of type Barang or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Barang relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProdusenQuery The current query, for fluid interface
     */
    public function joinBarang($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Barang');

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
            $this->addJoinObject($join, 'Barang');
        }

        return $this;
    }

    /**
     * Use the Barang relation Barang object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   BarangQuery A secondary query class using the current class as primary query
     */
    public function useBarangQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBarang($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Barang', 'BarangQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Produsen $produsen Object to remove from the list of results
     *
     * @return ProdusenQuery The current query, for fluid interface
     */
    public function prune($produsen = null)
    {
        if ($produsen) {
            $this->addUsingAlias(ProdusenPeer::ID, $produsen->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
