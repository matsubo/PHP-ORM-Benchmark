<?php


/**
 * Base class that represents a query for the 'author' table.
 *
 * 
 *
 * @method     AuthorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AuthorQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     AuthorQuery orderByPassword($order = Criteria::ASC) Order by the password column
 *
 * @method     AuthorQuery groupById() Group by the id column
 * @method     AuthorQuery groupByName() Group by the name column
 * @method     AuthorQuery groupByPassword() Group by the password column
 *
 * @method     AuthorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AuthorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AuthorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Author findOne(PropelPDO $con = null) Return the first Author matching the query
 * @method     Author findOneOrCreate(PropelPDO $con = null) Return the first Author matching the query, or a new Author object populated from the query conditions when no match is found
 *
 * @method     Author findOneById(int $id) Return the first Author filtered by the id column
 * @method     Author findOneByName(string $name) Return the first Author filtered by the name column
 * @method     Author findOneByPassword(string $password) Return the first Author filtered by the password column
 *
 * @method     array findById(int $id) Return Author objects filtered by the id column
 * @method     array findByName(string $name) Return Author objects filtered by the name column
 * @method     array findByPassword(string $password) Return Author objects filtered by the password column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseAuthorQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAuthorQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'orm', $modelName = 'Author', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AuthorQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AuthorQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AuthorQuery) {
			return $criteria;
		}
		$query = new AuthorQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Author|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AuthorPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    AuthorQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AuthorPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AuthorQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AuthorPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AuthorQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AuthorPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AuthorQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AuthorPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the password column
	 * 
	 * @param     string $password The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AuthorQuery The current query, for fluid interface
	 */
	public function filterByPassword($password = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($password)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $password)) {
				$password = str_replace('*', '%', $password);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AuthorPeer::PASSWORD, $password, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Author $author Object to remove from the list of results
	 *
	 * @return    AuthorQuery The current query, for fluid interface
	 */
	public function prune($author = null)
	{
		if ($author) {
			$this->addUsingAlias(AuthorPeer::ID, $author->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAuthorQuery
