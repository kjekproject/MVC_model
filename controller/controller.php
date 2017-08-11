<?php

/**
 * This class includes methods for controllers.
 *
 * @abstract
 */
abstract class Controller{
 
    /**
     * It redirects URL.
     *
     * @param string $url URL to redirect
     *
     * @return void
     */
    public function redirect($url) {
        header("location: ".$url);
    }
    /**
     * It loads the object with the view.
     *
     * @param string $name name class with the class
     * @param string $path pathway to the file with the class
     *
     * @return object
     */
    public function loadView($name, $path='view/') {
        $path = $path.$name.'.php';
        $name = $name.'View';
        try {
            if(is_file($path)) {
                require $path;
                $ob = new $name();
            } else {
                throw new Exception('Can not open view '.$name.' in: '.$path);
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
}

