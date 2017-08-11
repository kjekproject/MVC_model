<?php

/**
 * This class includes methods for models.
 *
 * @abstract
 */
abstract class Model{
    /**
     * object of the class PDO
     *
     * @var object
     */
    protected $pdo;
 
    /**
     * It sets connect with the database.
     *
     * @return void
     */
    public function  __construct() {
 
    }
    /**
     * It loads the object with the model.
     *
     * @param string $name name class with the class
     * @param string $path pathway to the file with the class
     *
     * @return object
     */
    public function loadModel($name, $path='') {
 
    }
    /**
     * It selects data from the database.
     *
     * @param string $from Table
     * @param <type> $select Records to select (default * (all))
     * @param <type> $where Condition to query
     * @param <type> $order Order ($record ASC/DESC)
     * @param <type> $limit LIMIT
     * @return array
     */
    public function select($from, $select='*', $where=NULL, $order=NULL, $limit=NULL) {
 
    }
}

