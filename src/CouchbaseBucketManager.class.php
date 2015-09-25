<?php

/**
 * Class CouchbaseBucketManager
 *
 * Class exposing the various available management operations that can be performed on a bucket.
 */
class CouchbaseBucketManager {

    /**
     * @param $binding
     * @param string $name
     */
    public function __construct($binding, $name) { }

    /**
     * Returns all the design documents for this bucket.
     *
     * @return mixed
     */
    public function getDesignDocuments() { }

    /**
     * Inserts a design document to this bucket.  Failing if a design document with the same name already exists.
     *
     * @param string $name  Name of the design document.
     * @param mixed $data  The design document data.
     *
     * @returns bool
     */
    public function insertDesignDocument($name, $data) { }

    /**
     * Inserts a design document to this bucket.  Overwriting any existing design document with the same name.
     *
     * @param string $name  Name of the design document.
     * @param mixed $data  The design document data.
     *
     * @returns bool
     */
    public function upsertDesignDocument($name, $data) { }

    /**
     * Retrieves a design documents from the bucket.
     *
     * @param string $name  Name of the design document.
     *
     * @return mixed
     */
    public function getDesignDocument($name) { }

    /**
     * Deletes a design document from the bucket.
     *
     * @param string $name  Name of the design document.
     *
     * @return mixed
     */
    public function removeDesignDocument($name) { }

    /**
     * Flushes this bucket (clears all data).
     */
    public function flush() { }

    /**
     * Retrieves bucket status information
     *
     * Returns an associative array of status information as seen by the cluster for this bucket.  The exact structure
     * of the returned data can be seen in the Couchbase Manual by looking at the bucket /info endpoint.
     *
     * @return mixed  The status information.
     */
    public function info() { }

}