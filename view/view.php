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
    public function loadModel($name, $path='') {
 
    }
    /**
     * It includes template file.
     *
     * @return void
     */
    public function render() {
 
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
 
    }
    /**
     * It gets data.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function get($name) {
 
    }
}

