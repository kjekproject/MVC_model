<?php

/**
 * This class includes methods for views.
 *
 * @abstract
 */
abstract class View{
 
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
                $ob = new $name();
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
     * It includes template file.
     *
     * @return void
     */
    public function render($name, $path='templates/') {
        $path = $path.$name.'html.php';
        try {
            if(is_file($path)) {
                require '$path';
            } else {
                throw new Exception('Can not open template '.$name.' in: '.$path);
            }
        } catch (Exception $ex) {
            echo $ex->getMessage().'<br/>
                File: '.$ex->getFile().'<br/>
                Code line: '.$ex->getLine().'<br/>
                Trace: '.$ex->getTraceAsString();
            exit;
        }
    }
    /**
     * It sets data.
     *
     * @param string $name
     * @param mixed $value
     *
     * @return void
     */
    public function set($name, $value) {
        $this->$name = $value;
    }
    /**
     * It gets data.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function get($name) {
        return $this->$name;
    }
}

