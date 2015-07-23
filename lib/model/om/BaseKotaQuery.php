<?php


/**
 * Base class that represents a query for the 'kota' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.7.0 on:
 *
 * 07/21/15 02:00:10
 *
 * @method KotaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method KotaQuery orderByNamaKota($order = Criteria::ASC) Order by the nama_kota column
 * @method KotaQuery orderByIdPropinsi($order = Criteria::ASC) Order by the id_propinsi column
 *
 * @method KotaQuery groupById() Group by the id column
 * @method KotaQuery groupByNamaKota() Group by the nama_kota column
 * @method KotaQuery groupByIdPropinsi() Group by the id_propinsi column
 *
 * @method KotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method KotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method KotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method KotaQuery leftJoinPropinsi($relationAlias = null) Adds a LEFT JOIN clause to the query using the Propinsi relation
 * @method KotaQuery rightJoinPropinsi($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Propinsi relation
 * @method KotaQuery innerJoinPropinsi($relationAlias = null) Adds a INNER JOIN clause to the query using the Propinsi relation
 *
 * @method KotaQuery leftJoinCustomers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customers relation
 * @method KotaQuery rightJoinCustomers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customers relation
 * @method KotaQuery innerJoinCustomers($relationAlias = null) Adds a INNER JOIN clause to the query using the Customers relation
 *
 * @method KotaQuery leftJoinProdusen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Produsen relation
 * @method KotaQuery rightJoinProdusen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Produsen relation
 * @method KotaQuery innerJoinProdusen($relationAlias = null) Adds a INNER JOIN clause to the query using the Produsen relation
 *
 * @method KotaQuery leftJoinSupplier($relationAlias = null) Adds a LEFT JOIN clause to the query using the Supplier relation
 * @method KotaQuery rightJoinSupplier($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Supplier relation
 * @method KotaQuery innerJoinSupplier($relationAlias = null) Adds a INNER JOIN clause to the query using the Supplier relation
 *
 * @method Kota findOne(PropelPDO $con = null) Return the first Kota matching the query
 * @method Kota findOneOrCreate(PropelPDO $con = null) Return the first Kota matching the query, or a new Kota object populated from the query conditions when no match is found
 *
 * @method Kota findOneByNamaKota(string $nama_kota) Return the first Kota filtered by the nama_kota column
 * @method Kota findOneByIdPropinsi(int $id_propinsi) Return the first Kota filtered by the id_propinsi column
 *
 * @method array findById(int $id) Return Kota objects filtered by the id column
 * @method array findByNamaKota(string $nama_kota) Return Kota objects filtered by the nama_kota column
 * @method array findByIdPropinsi(int $id_propinsi) Return Kota objects filtered by the id_propinsi column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseKotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseKotaQuery object.
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
            $modelName = 'Kota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new KotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   KotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return KotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof KotaQuery) {
            return $criteria;
        }
        $query = new KotaQuery(null, null, $modelAlias);

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
     * @return   Kota|Kota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = KotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(KotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Kota A model object, or null if the key is not found
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
     * @return                 Kota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nama_kota`, `id_propinsi` FROM `kota` WHERE `id` = :p0';
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
            $obj = new Kota();
            $obj->hydrate($row);
            KotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Kota|Kota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Kota[]|mixed the list of results, formatted by the current formatter
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
     * @return KotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(KotaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return KotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(KotaPeer::ID, $keys, Criteria::IN);
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
     * @return KotaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(KotaPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(KotaPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KotaPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nama_kota column
     *
     * Example usage:
     * <code>
     * $query->filterByNamaKota('fooValue');   // WHERE nama_kota = 'fooValue'
     * $query->filterByNamaKota('%fooValue%'); // WHERE nama_kota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $namaKota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KotaQuery The current query, for fluid interface
     */
    public function filterByNamaKota($namaKota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($namaKota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $namaKota)) {
                $namaKota = str_replace('*', '%', $namaKota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KotaPeer::NAMA_KOTA, $namaKota, $comparison);
    }

    /**
     * Filter the query on the id_propinsi column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPropinsi(1234); // WHERE id_propinsi = 1234
     * $query->filterByIdPropinsi(array(12, 34)); // WHERE id_propinsi IN (12, 34)
     * $query->filterByIdPropinsi(array('min' => 12)); // WHERE id_propinsi >= 12
     * $query->filterByIdPropinsi(array('max' => 12)); // WHERE id_propinsi <= 12
     * </code>
     *
     * @see       filterByPropinsi()
     *
     * @param     mixed $idPropinsi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KotaQuery The current query, for fluid interface
     */
    public function filterByIdPropinsi($idPropinsi = null, $comparison = null)
    {
        if (is_array($idPropinsi)) {
            $useMinMax = false;
            if (isset($idPropinsi['min'])) {
                $this->addUsingAlias(KotaPeer::ID_PROPINSI, $idPropinsi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPropinsi['max'])) {
                $this->addUsingAlias(KotaPeer::ID_PROPINSI, $idPropinsi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KotaPeer::ID_PROPINSI, $idPropinsi, $comparison);
    }

    /**
     * Filter the query by a related Propinsi object
     *
     * @param   Propinsi|PropelObjectCollection $propinsi The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 KotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPropinsi($propinsi, $comparison = null)
    {
        if ($propinsi instanceof Propinsi) {
            return $this
                ->addUsingAlias(KotaPeer::ID_PROPINSI, $propinsi->getId(), $comparison);
        } elseif ($propinsi instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(KotaPeer::ID_PROPINSI, $propinsi->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByPropinsi() only accepts arguments of type Propinsi or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Propinsi relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return KotaQuery The current query, for fluid interface
     */
    public function joinPropinsi($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Propinsi');

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
            $this->addJoinObject($join, 'Propinsi');
        }

        return $this;
    }

    /**
     * Use the Propinsi relation Propinsi object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PropinsiQuery A secondary query class using the current class as primary query
     */
    public function usePropinsiQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPropinsi($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Propinsi', 'PropinsiQuery');
    }

    /**
     * Filter the query by a related Customers object
     *
     * @param   Customers|PropelObjectCollection $customers  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 KotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomers($customers, $comparison = null)
    {
        if ($customers instanceof Customers) {
            return $this
                ->addUsingAlias(KotaPeer::ID, $customers->getIdKota(), $comparison);
        } elseif ($customers instanceof PropelObjectCollection) {
            return $this
                ->useCustomersQuery()
                ->filterByPrimaryKeys($customers->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomers() only accepts arguments of type Customers or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customers relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return KotaQuery The current query, for fluid interface
     */
    public function joinCustomers($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customers');

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
            $this->addJoinObject($join, 'Customers');
        }

        return $this;
    }

    /**
     * Use the Customers relation Customers object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CustomersQuery A secondary query class using the current class as primary query
     */
    public function useCustomersQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCustomers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customers', 'CustomersQuery');
    }

    /**
     * Filter the query by a related Produsen object
     *
     * @param   Produsen|PropelObjectCollection $produsen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 KotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProdusen($produsen, $comparison = null)
    {
        if ($produsen instanceof Produsen) {
            return $this
                ->addUsingAlias(KotaPeer::ID, $produsen->getIdKota(), $comparison);
        } elseif ($produsen instanceof PropelObjectCollection) {
            return $this
                ->useProdusenQuery()
                ->filterByPrimaryKeys($produsen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProdusen() only accepts arguments of type Produsen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Produsen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return KotaQuery The current query, for fluid interface
     */
    public function joinProdusen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Produsen');

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
            $this->addJoinObject($join, 'Produsen');
        }

        return $this;
    }

    /**
     * Use the Produsen relation Produsen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProdusenQuery A secondary query class using the current class as primary query
     */
    public function useProdusenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProdusen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Produsen', 'ProdusenQuery');
    }

    /**
     * Filter the query by a related Supplier object
     *
     * @param   Supplier|PropelObjectCollection $supplier  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 KotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySupplier($supplier, $comparison = null)
    {
        if ($supplier instanceof Supplier) {
            return $this
                ->addUsingAlias(KotaPeer::ID, $supplier->getIdKota(), $comparison);
        } elseif ($supplier instanceof PropelObjectCollection) {
            return $this
                ->useSupplierQuery()
                ->filterByPrimaryKeys($supplier->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySupplier() only accepts arguments of type Supplier or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Supplier relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return KotaQuery The current query, for fluid interface
     */
    public function joinSupplier($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Supplier');

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
            $this->addJoinObject($join, 'Supplier');
        }

        return $this;
    }

    /**
     * Use the Supplier relation Supplier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SupplierQuery A secondary query class using the current class as primary query
     */
    public function useSupplierQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSupplier($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Supplier', 'SupplierQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Kota $kota Object to remove from the list of results
     *
     * @return KotaQuery The current query, for fluid interface
     */
    public function prune($kota = null)
    {
        if ($kota) {
            $this->addUsingAlias(KotaPeer::ID, $kota->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}