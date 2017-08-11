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
        try {
            require 'config/sql.php';
            $this->pdo = new PDO('mysql:host='.$host.';dbname='.$db_name, $user_name, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (DBException $ex) {
            echo 'The connect can not create: '.$ex->getMessage();
        }
    }
    /**
     * It loads the object with the model.
     *
     * @param string $name name class with the class
     * @param string $path pathway to the file with the class
     *
     * @return object
     */
    public function loadModel($name, $path='model/') {
        $path = $path.$name.'.php';
        $name = $name.'Model';
        try {
            if(is_file($path)) {
                require $path;
                $ob = new name();
            } else {
                throw new Exception('Can not open model '.$name.' in: '.$path);
            }
        } catch (Exception $ex) {
                echo $ex->getMessage().'<br/>
                File: '.$ex->getFile().'<br/>
                Code line: '.$ex->getLine().'<br/>
                Trace: '.$ex->getTraceAsString();
            exit;
        }
        return $ob;
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
        $query = 'SELECT '.$select.' FROM '.$form;
        if($where != NULL)
            $query.= ' WHERE '.$where;
        if($order !=NULL)
            $query.= ' ORDER BY '.$order;
        if($limit != NULL)
            $query.= ' LIMIT '.$limit;
        
        $select = $this->pdo->query($query);
        foreach ($select as $row) {
            $data[] = $row;
        }
        $select->closeCursor();
        
        return $data;
    }
}

