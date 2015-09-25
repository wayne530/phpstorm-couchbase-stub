<?php

/**
 * Class CouchbaseN1qlQuery
 *
 * Represents a N1QL query to be executed against a Couchbase bucket.
 */
class CouchbaseN1qlQuery {

    /** @var array */
    public $options = array();

    const NOT_BOUNDED = 1;
    const REQUEST_PLUS = 2;
    const STATEMENT_PLUS = 3;

    /**
     * Creates a new N1qlQuery instance directly from a N1QL DML.
     *
     * @param string $str
     *
     * @return CouchbaseN1qlQuery
     */
    public static function fromString($str) { }

    /**
     * Specify the consistency level for this query.
     *
     * @param int $consistency  consistency level; use constants NOT_BOUNDED, REQUEST_PLUS, STATEMENT_PLUS
     *
     * @return CouchbaseN1qlQuery
     */
    public function consistency($consistency) { }

    /**
     * Generates the N1QL object as it will be passed to the server.
     *
     * @return object
     */
    public function toObject() { }

    /**
     * Returns the string representation of this N1ql query (the statement).
     *
     * @return string
     */
    public function toString() { }

}