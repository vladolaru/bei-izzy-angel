<?php
class Customer {
    private $name;
    private $age;
    private $address;

    function __consturct($name, $age, $address){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    function get_name() {
        return $this->name;
    }

    function get_age() {
        return $this->age;
    }

    function get_address() {
        return $this->address;
    }

}

