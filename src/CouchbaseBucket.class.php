<?php

/**
 * Class CouchbaseBucket
 *
 * Represents a bucket connection.
 *
 * Supported properties:
 *   - operationTimeout
 *   - viewTimeout
 *   - durabilityInterval
 *   - durabilityTimeout
 *   - httpTimeout
 *   - configTimeout
 *   - configDelay
 *   - configNodeTimeout
 *   - htconfigIdleTimeout
 */
class CouchbaseBucket {

    /**
     * Constructs a bucket connection.
     *
     * @param string $connstr  A cluster connection string to connect with.
     * @param string $name  The name of the bucket to connect to.
     * @param string $password  The password to authenticate with.
     */
    public function __construct($connstr, $name, $password) { }

    /**
     * Returns an instance of a CouchbaseBucketManager for performing management operations against a bucket.
     *
     * @return CouchbaseBucketManager
     */
    public function manager() { }

    /**
     * Enables N1QL support on the client.  A cbq-server URI must be passed. This method will be deprecated in the
     * future in favor of automatic configuration through the connected cluster.
     *
     * @param string|array $hosts  one or more hosts
     */
    public function enableN1ql($hosts) { }

    /**
     * Inserts a document.  This operation will fail if the document already exists on the cluster.
     *
     * @param string|array $ids  one or more ids
     * @param mixed $val
     * @param array $options  expiry, flags
     *
     * @return mixed
     */
    public function insert($ids, $val = null, $options = array()) { }

    /**
     * Inserts or updates a document, depending on whether the document already exists on the cluster.
     *
     * @param string|array $ids  one or more ids
     * @param mixed $val
     * @param array $options  expiry, flags
     *
     * @return mixed
     */
    public function upsert($ids, $val = null, $options = array()) { }

    /**
     * Replaces a document.
     *
     * @param string|array $ids  one or more ids
     * @param mixed $val
     * @param array $options  cas, expiry, flags
     *
     * @return mixed
     */
    public function replace($ids, $val = null, $options = array()) { }

    /**
     * Appends content to a document.
     *
     * @param string|array $ids  one or more ids
     * @param mixed $val
     * @param array $options  cas
     *
     * @return mixed
     */
    public function append($ids, $val = null, $options = array()) { }

    /**
     * Prepends content to a document.
     *
     * @param string|array $ids  one or more ids
     * @param mixed $val
     * @param array $options  cas
     *
     * @return mixed
     */
    public function prepend($ids, $val = null, $options = array()) { }

    /**
     * Deletes a document.
     *
     * @param string|array $ids  one or more ids
     * @param array $options  cas
     *
     * @return mixed
     */
    public function remove($ids, $options = array()) { }

    /**
     * Retrieves a document.
     *
     * @param string|array $ids  one or more ids
     * @param array $options  lock
     *
     * @return mixed
     */
    public function get($ids, $options = array()) { }

    /**
     * Retrieves a document and simultaneously updates its expiry.
     *
     * @param string $id
     * @param integer $expiry
     * @param array $options
     *
     * @return mixed
     */
    public function getAndTouch($id, $expiry, $options = array()) { }

    /**
     * Retrieves a document and locks it.
     *
     * @param string $id
     * @param integer $lockTime
     * @param array $options
     *
     * @return mixed
     */
    public function getAndLock($id, $lockTime, $options = array()) { }

    /**
     * Retrieves a document from a replica.
     *
     * @param string $id
     * @param array $options
     *
     * @return mixed
     */
    public function getFromReplica($id, $options = array()) { }

    /**
     * Updates a documents expiry.
     *
     * @param string $id
     * @param integer $expiry
     * @param array $options
     *
     * @return mixed
     */
    public function touch($id, $expiry, $options = array()) { }

    /**
     * Increment or decrements a key (based on $delta).
     *
     * @param string|array $ids  one or more ids
     * @param integer $delta
     * @param array $options  initial, expiry
     *
     * @return mixed
     */
    public function counter($ids, $delta, $options = array()) { }

    /**
     * Unlocks a key previous locked with a call to get().
     *
     * @param string|array $ids  one or more ids
     * @param array $options  cas
     *
     * @return mixed
     */
    public function unlock($ids, $options = array()) { }

    /**
     * Executes a view query.
     *
     * @param CouchbaseViewQuery $queryObj
     *
     * @return mixed  results
     */
    public function _view($queryObj) { }

    /**
     * Performs a N1QL query.
     *
     * @param CouchbaseN1qlQuery $queryObj  N1QL query object
     *
     * @return mixed  results
     */
    public function _n1ql($queryObj) { }

    /**
     * Performs a query (either ViewQuery or N1qlQuery).
     *
     * @param CouchbaseViewQuery|CouchbaseN1qlQuery $query
     *
     * @return mixed  results
     */
    public function query($query) { }

    /**
     * Sets custom encoder and decoder functions for handling serialization.
     *
     * @param string $encoder  The encoder function name
     * @param string $decoder  The decoder function name
     */
    public function setTranscoder($encoder, $decoder) { }

    /**
     * Magic function to handle the retrieval of various properties.
     *
     * @param string $name  property name; @see CouchbaseBucket
     */
    public function __get($name) { }

    /**
     * Magic function to handle the setting of various properties.
     *
     * @param string $name  property name; @see CouchbaseBucket
     * @param mixed $value
     */
    public function __set($name, $value) { }

}