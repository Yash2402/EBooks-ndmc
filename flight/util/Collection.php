<?php
namespace flight\util;
 
class Collection{
    private $data;

    public function __construct(array $data = array()) {
        $this->data = $data;
    }
     
    public function __get($key) {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }
     
    public function __set($key, $value) {
        $this->data[$key] = $value;
    }
     
    public function __isset($key) {
        return isset($this->data[$key]);
    }
    
    public function __unset($key) {
        unset($this->data[$key]);
    }
     
    public function keys() {
        return array_keys($this->data);
    }

    public function getData() {
        return $this->data;
    }

    public function setData(array $data) {
        $this->data = $data;
    }

    public function clear() {
        $this->data = array();
    }
}
