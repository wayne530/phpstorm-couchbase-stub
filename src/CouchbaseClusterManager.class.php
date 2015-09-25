<?php

/**
 * Class CouchbaseClusterManager
 *
 * Class exposing the various available management operations that can be performed on a cluster.
 */
class CouchbaseClusterManager {

    /**
     * Constructs a cluster manager connection.
     *
     * @param string $connstr  A connection string to connect with.
     * @param string $username  The username to authenticate with.
     * @param string $password  The password to authenticate with.
     */
    public function __construct($connstr, $username, $password) { }

    /**
     * Lists all buckets on this cluster.
     *
     * @return mixed
     */
    public function listBuckets() { }

    /**
     * Creates a new bucket on this cluster.
     *
     * @param string $name  The bucket name.
     * @param array $opts  The options for this bucket.
     *
     * @return mixed
     */
    public function createBucket($name, $opts = array()) { }

    /**
     * Deletes a bucket from the cluster.
     *
     * @param string $name  The bucket name.
     *
     * @return mixed
     */
    public function removeBucket($name) { }

    /**
     * Retrieves cluster status information
     *
     * Returns an associative array of status information as seen on the cluster.  The exact structure of the returned
     * data can be seen in the Couchbase Manual by looking at the cluster /info endpoint.
     *
     * @return mixed  The status information.
     */
    public function info() { }

}