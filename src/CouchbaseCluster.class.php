<?php

/**
 * Class CouchbaseCluster
 *
 * Represents a cluster connection.
 */
class CouchbaseCluster {

    /**
     * @param string $dsn  A cluster DSn to connect with.
     * @param string $username  The username for the cluster.
     * @param string $password  The password for the cluster.
     */
    public function __construct($dsn = 'http://127.0.0.1/', $username = '', $password = '') { }

    /**
     * Constructs a connection to a bucket.
     *
     * @param string $name  The name of the bucket to open.
     * @param string $password  The bucket password to authenticate with.
     *
     * @return CouchbaseBucket
     */
    public function openBucket($name = 'default', $password = '') { }

    /**
     * Creates a manager allowing the management of a Couchbase cluster.
     *
     * @param string $username  The administration username.
     * @param string $password  The administration password.
     *
     * @return  CouchbaseClusterManager
     */
    public function manager($username, $password) { }

}