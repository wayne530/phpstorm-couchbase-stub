<?php

/**
 * Class CouchbaseViewQuery
 *
 * Represents a view query to be executed against a Couchbase bucket.
 */
class CouchbaseViewQuery {

    /** @var string */
    public $ddoc = '';

    /** @var string */
    public $name = '';

    /** @var array */
    public $options = array();

    const UPDATE_BEFORE = 1;
    const UPDATE_NONE = 2;
    const UPDATE_AFTER = 3;

    const ORDER_ASCENDING = 1;
    const ORDER_DESCENDING = 2;

    /**
     * private constructor
     */
    private function __construct() { }

    /**
     * Creates a new Couchbase ViewQuery instance for performing a view query.
     *
     * @param string $ddoc  The name of the design document to query.
     * @param string $name  The name of the view to query.
     *
     * @return _CouchbaseDefaultViewQuery
     */
    public static function from($ddoc, $name) { }

    /**
     * Creates a new Couchbase ViewQuery instance for performing a spatial query.
     *
     * @param string $ddoc  The name of the design document to query.
     * @param string $name  The name of the view to query.
     *
     * @return _CouchbaseSpatialViewQuery
     */
    public static function fromSpatial($ddoc, $name) { }

    /**
     * Specifies the mode of updating to perform before and after executing this query.
     *
     * @param int $stale  use constants UPDATE_BEFORE, UPDATE_NONE, UPDATE_AFTER
     *
     * @return CouchbaseViewQuery
     */
    public function stale($stale) { }

    /**
     * Skips a number of records from the beginning of the result set.
     *
     * @param int $skip  number of records to skip
     *
     * @return CouchbaseViewQuery
     */
    public function skip($skip) { }

    /**
     * Limits the result set to a restricted number of results.
     *
     * @param int $limit  max number of records in returned result set
     *
     * @return CouchbaseViewQuery
     */
    public function limit($limit) { }

    /**
     * Specifies custom options to pass to the server.  Note that these options are expected to be already encoded.
     *
     * @param array $opts  key-value pairs of custom options to pass to the server
     *
     * @return CouchbaseViewQuery
     */
    public function custom(array $opts) { }

}

/**
 * Class _CouchbaseDefaultViewQuery
 *
 * Represents a regular view query to perform against the server. Note that this object should never be instantiated
 * directly, but instead through the CouchbaseViewQuery::from method.
 */
class _CouchbaseDefaultViewQuery extends CouchbaseViewQuery {

    /**
     * public constructor
     */
    public function __construct() { }

    /**
     * Orders the results by key as specified.
     *
     * @param int $order  use constants ORDER_ASCENDING, ORDER_DESCENDING
     *
     * @return _CouchbaseDefaultViewQuery
     */
    public function order($order) { }

    /**
     * Specifies a reduction function to apply to the index.
     *
     * @param bool $reduce
     *
     * @return _CouchbaseDefaultViewQuery
     */
    public function reduce($reduce) { }

    /**
     * Specifies the level of grouping to use on the results.
     *
     * @param int|bool $group  enable/disable grouping or specify level of grouping
     *
     * @return _CouchbaseDefaultViewQuery
     */
    public function group($group) { }

    /**
     * Specifies the level at which to perform view grouping.
     *
     * @param int $group_level  specify level of grouping
     *
     * @return _CouchbaseDefaultViewQuery
     */
    public function group_level($group_level) { }

    /**
     * Specifies a specific key to return from the index.
     *
     * @param mixed $key
     *
     * @return _CouchbaseDefaultViewQuery
     */
    public function key($key) { }

    /**
     * Specifies a list of keys to return from the index.
     *
     * @param array $keys
     *
     * @return _CouchbaseDefaultViewQuery
     */
    public function keys(array $keys) { }

    /**
     * Specifies a range of keys to return from the index.
     *
     * @param mixed|null $start  start key
     * @param mixed|null $end  end key
     * @param bool $inclusive_end  whether to include the end key
     *
     * @return _CouchbaseDefaultViewQuery
     */
    public function range($start = null, $end = null, $inclusive_end = false) { }

    /**
     * Specifies a range of document ids to return from the index.
     *
     * @param mixed|null $start  start of range document id
     * @param mixed|null $end  end of range document id
     *
     * @return _CouchbaseDefaultViewQuery
     */
    public function id_range($start = null, $end = null) { }

    /**
     * Generates the view query as it will be passed to the server.
     *
     * @return string
     */
    public function toString() { }

}

/**
 * Class _CouchbaseSpatialViewQuery
 *
 * Represents a spatial view query to perform against the server.  Note that this object should never be instantiated
 * directly, but instead through the CouchbaseViewQuery::fromSpatial method.
 */
class _CouchbaseSpatialViewQuery extends CouchbaseViewQuery {

    /**
     * public constructor
     */
    public function __construct() { }

    /**
     * Specifies the bounding box to search within.
     *
     * @param array $bbox  bounding box coordinates expressed as a list of numeric values
     *
     * @return _CouchbaseSpatialViewQuery
     */
    public function bbox($bbox) { }

    /**
     * Generates the view query as it will be passed to the server.
     *
     * @return string
     */
    public function toString() { }

}