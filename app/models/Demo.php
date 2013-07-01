<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Demo
 *
 * @author dieplb
 */
class Demo {
    /**
     *
     * @var type 
     */
    private $_index;
    
    /**
     * 
     * @param type $index
     */
    public function __construct($index = 0) {
        $this->_index = $index;
    }
    
    /**
     * 
     * @return type
     */
    public function get(){
        return $this->_index;
    }
    
    /**
     * 
     * @param type $index
     */
    public function set($index){
        $this->_index = $index;
    }
    
    /**
     * 
     * @param type $a
     * @param type $b
     * @return type
     */
    public function addNumber($a, $b){
        return $a + $b;
    }
}

?>
